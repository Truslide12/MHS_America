<?php

namespace App\Models\Support;

use Log;
use Config;

use App\Models\Geoname;
use App\Models\State;
use App\Models\County;
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
			if(is_null($profile) || !is_object($profile) || ($profile->county_id == 0) || ((strtolower(str_simplify($firstItem['address_components']['city'])) != strtolower(str_simplify($profile->city->place_name)) || strtolower($firstItem['address_components']['state']) != $profile->state->abbr) && $firstItem['accuracy'] >= 0.8) ) {
				$newstate = State::byAbbr(strtolower($firstItem['address_components']['state']));
				if(is_object($newstate) && is_a($newstate, Eloquent::class)) {
					$newcity = Geoname::byCityState( $firstItem['address_components']['city'], $newstate->id );
					if(is_object($newcity) && is_a($newcity, Eloquent::class)) {
						$profile_array['city_id'] = $newcity->id;
						$profile_array['state_id'] = $newcity->state_id;
						$city_updated = true;
						/* TODO: Find correct county by lookup response */
						//$profile_array['county_id'] = $newcity->county->id;
						$county_name = trim(str_replace(['Municipality', 'Borough', 'Parish', 'County', 'Census Area'], '', $firstItem['address_components']['county']));

						$newcounty = $newcity->counties()->where('countyshapes.name', 'LIKE', str_ident($county_name))->first();
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
						//Add city to database

						/* START FETCHING CITY (LIKELY A NEIGHBORHOOD REALLY) FROM GEOCOD.IO */
						$city_request = $firstItem['address_components']['city'].', '.$firstItem['address_components']['state'].' '.$firstItem['address_components']['zip'];

						/* API call */
						$city_req = Config::get('services.geocodio.geocode').'?q='.urlencode($city_request).'&fields=census&api_key='.Config::get('services.geocodio.api_key');
						$city_res = json_decode(file_get_contents($city_req), true);
						
						/* Log errors and skip processing if necessary */
						if(is_array($city_res) && array_key_exists('error', $city_res)) {
							$geocoding_works = false;
							Log::channel('slack_geocodio_critical')->critical($city_res['error']);
						}
						
						/* FINISH FETCHING CITY */

						if ($geocoding_works && is_array($city_res)) {
							/* Log warnings */
							if(array_key_exists('_warnings', $city_res)) {
								Log::channel('slack_geocodio_warning')->warning('Warnings', $city_res['_warnings']);
							}

							/* PROCESS NEW CITY */
							if (array_key_exists('results', $city_res) && count($city_res['results']) > 0) {
								$firstCity = $city_res['results'][0];

								$county_name = trim(str_replace(['Municipality', 'Borough', 'Parish', 'County', 'Census Area'], '', $firstCity['address_components']['county']));
								$newcounty = County::where('countyshapes.name', 'LIKE', str_ident($county_name))->where('state_id', $newstate->id)->first();

								if (is_object($newcounty) && is_a($newcounty, Eloquent::class)) {
									//Dummy FIPS in the correct county
									$fips_code = $newcounty->admin_fips.'99';
									/* Check for census data - alt source for FIPS codes */
									//if (array_key_exists('fields', $firstItem) && array_key_exists('census', $firstItem['fields']) && is_array($firstItem['fields']['census']) && count($firstItem['fields']['census']) > 0) {
									//	$firstCensusItem = array_values($firstItem['fields']['census'])[0];
									//
									//}


									$newCityItem = new Geoname;
									$newCityItem->place_name = $firstCity['address_components']['city'];
									$newCityItem->name = str_ident($firstCity['address_components']['city']);
									$newCityItem->state_id = $newstate->id;
									$newCityItem->fips_code = $fips_code;
									$newCityItem->placens = '';
									$newCityItem->awater = 0;
									$newCityItem->aland = 0;
									$newCityItem->classfp = 'U4';
									$newCityItem->funcstat = 'S';
									$newCityItem->loc_type = 2;
									$newCityItem->intptlat = $firstCity['location']['lat'];
									$newCityItem->intptlon = $firstCity['location']['lng'];
									$newCityItem->geometry = DB::raw('ST_Multi(ST_Buffer(ST_SetSRID(ST_MakePoint('.$firstCity['location']['lng'].', '.$firstCity['location']['lat'].'), 4326), 0.01))');
									$newCityItem->center_point = new Point($firstCity['location']['lat'], $firstCity['location']['lng']);
									$newCityItem->objectid = 0;

									if ($newCityItem->save()) {
										$profile_array['city_id'] = $newCityItem->id;
										$profile_array['county_id'] = $newcounty->id;
										$profile_array['state_id'] = $newCityItem->state_id;

										$city_updated = true;
									}else{
										$geocoding_works = false;
									}

								}else{
									$geocoding_works = false;
								}
							}
						}else{
							$geocoding_works = false;
						}
						
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