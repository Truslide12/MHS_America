<?php

namespace App\Models\Support;

use Log;
use Config;

use App\Models\Geoname;
use App\Models\State;
use Phaza\LaravelPostgis\Geometries\Point;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Geocoder {
	
	public function address($addrA, $addrB, $addrCity, $addrState, $addrZip, $profile = NULL)
	{
		/* GEOCOD.IO */
		$geocoding_works = true;
		$profile_array = [];

		/* The validator checked if these exist aready. */
		$cityobj = Geoname::where('id', $addrCity)->first();
		$stateobj = State::where('id', $addrState)->first();


		$full_address = trim( $addrA.($addrB != '' ? ', '.$addrB : '').', '.$cityobj->place_name.','.$stateobj->abbr.' '.$addrZip );

		/* API call */
		$req = Config::get('services.geocodio.geocode').'?q='.urlencode($full_address).'&fields=census&api_key='.Config::get('services.geocodio.api_key');
		$res = json_decode(file_get_contents($req), true);
		
		/* Log errors and skip processing if necessary */
		if(is_array($res) && array_key_exists('error', $res)) {
			$geocoding_works = false;
			Log::channel('slack_geocodio_critical')->critical($res['error']);
		}

		/* Log warnings */
		if($geocoding_works && is_array($res) && array_key_exists('_warnings', $res)) {
			Log::channel('slack_geocodio_warning')->warning('Warnings', $res['_warnings']);
		}

		/* Process results */
		if($geocoding_works && is_array($res) && array_key_exists('results', $res) && count($res['results']) > 0) {
			$firstItem = $res['results'][0]; // The first lookup result
			$formatted = $res['input']['address_components']; // The formatted version of the input

			
			if(array_key_exists('number', $firstItem['address_components']) && array_key_exists('formatted_street', $firstItem['address_components'])){
				/* Formatted address - from lookup */
				$profile_array['address'] = $firstItem['address_components']['number'].' '.$firstItem['address_components']['formatted_street'];
			}else{
				/* Formatted address - from input - worst case (likely remote area, rural) */
				$profile_array['address'] = $addrA;
			}
			
			/* Formatted addressb - based on input */
			if(array_key_exists('secondaryunit', $formatted) || array_key_exists('secondarynumber', $formatted) ) {
				$profile_array['addressb'] = implode(' ', [( $formatted['secondaryunit'] ?? '' ), ( $formatted['secondarynumber'] ?? '' )]);
			}elseif(strlen(trim($addrB)) > 0) {
				$profile_array['addressb'] = $addrB;
			}

			/* Correct zip code - from lookup */
			$profile_array['zipcode'] = $firstItem['address_components']['zip'];

			$city_updated = false;
			/* Verify city and state - from lookup */
			if(is_null($profile) || !is_object($profile) || ((strtolower(str_simplify($firstItem['address_components']['city'])) != strtolower(str_simplify($profile->city->place_name)) || strtolower($firstItem['address_components']['state']) != $profile->state->abbr) && $firstItem['accuracy'] >= 0.8) ) {
				$newstate = State::byAbbr(strtolower($firstItem['address_components']['state']));
				if(is_object($newstate) && is_a($newstate, Eloquent::class)) {
					$newcity = Geoname::byCityState( $firstItem['address_components']['city'], $newstate->id );
					if(is_object($newcity) && is_a($newcity, Eloquent::class)) {
						$profile_array['city_id'] = $newcity->id;
						$profile_array['state_id'] = $newcity->state_id;
						$city_updated = true;
						/* TODO: Find correct county by lookup response */
						//$profile_array['county_id'] = $newcity->county->id;
						$county_name_pre = explode(" ", $firstItem['address_components']['county']);

						$county_name = str_replace([' Municipality', ' Borough', ' Parish', ' County', ' Census Area'], '', $firstItem['address_components']['county']);
						if(count($county_name_pre) > 1 && in_array($county_name_pre[count($county_name_pre)-1], ['Municipality', 'Borough', 'Parish', 'County'])) {
							$county_name_pre = array_slice($county_name_pre, 0, -1);
						}elseif(count($county_name_pre) > 2 && $county_name_pre[count($county_name_pre)-2] == 'Census' && $county_name_pre[count($county_name_pre)-1] == 'Area') {
							$county_name_pre = array_slice($county_name_pre, 0, -2);
						}
						$county_name = implode(" ", $county_name_pre);

						$newcounty = $newcity->counties()->where('name', 'LIKE', str_ident($county_name))->first();
						if(is_object($newcounty)) {
							$profile_array['county_id'] = $newcounty->id;
						}else{
							$newcounty = $newcity->counties()->first();
							if(is_object($newcounty)) {
								$profile_array['county_id'] = $newcounty->id;
							}else{
								$profile_array['county_id'] = 0;
							}
						}
					}else{
						$geocoding_works = false;
					}
				}else{
					$geocoding_works = false;
				}

			}

			/* Coordinates */
			if(is_null($profile) || !is_object($profile)) {
				$profile_array['location'] = $firstItem['location'];
			}else{
				$profile_array['location'] = new Point($firstItem['location']['lat'], $firstItem['location']['lng']);
			}

		}
		
		return ['success' => $geocoding_works, 'data' => $profile_array, 'city_data' => (($geocoding_works && $city_updated) ? $newcity : false), 'state_data' => (($geocoding_works && $city_updated) ? $newstate : false)];
	}

}