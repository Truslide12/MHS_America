<?php

namespace App\Models;

use DB;
use Illuminate\Support\Str;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\MultiPolygon;
use Phaza\LaravelPostgis\Geometries\Point;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Geoname extends EloquentModel {

	use PostgisTrait;
	
	protected $table = 'places';

	public $timestamps = false;

	public $cityobj;

	protected $postgisFields = [
		'geometry' => MultiPolygon::class,
		'center_point' => Point::class,
	];

	public function scopeByZipCode($query, $str)
	{

		/* TODO: Zippopotamus */
		return $query->where('zipcode', strval($str))->first();
	}

	public function scopeByCityState($query, $city, $state)
	{
		if(is_numeric($city) && strlen(strval($city)) == 5) {
			//$token = $base->where('zipcode', $query);
			$stateObject = State::find($state);
			if(!is_a($stateObject, State::class)) {
				return $query->whereRaw('1 <> 1')->first();
			}

			/* Zippopotamus */
			$url = "https://api.zippopotam.us/us/".strval($city);

			$response = json_decode(file_get_contents($url), true);

			if(is_array($response) && array_key_exists('places', $response) && count($response['places']) > 0) {
				$place = $response['places'][0];
				
				//Must be in requested state
				if(strtolower($place['state abbreviation']) != strtolower($stateObject->abbr)) {
					return $query->whereRaw('1 <> 1')->first();
				}

				//Fetch result
				return $query->where('place_name', 'ilike', $place['place name'])
					 ->where('state_id', $state)->first();
			}
		}

		//Standard text query
		return $query->where('place_name', 'ilike', $city)
					 ->where('state_id', $state)->first();
	}

	/* DEFUNCT */
	public function scopeByOSM($query, $osm_id)
	{
		return $query->where('osm_id', $osm_id)->first();
	}

	public function scopeByFIPS($query, $fips_code)
	{
		return $query->where('fips_code', $fips_code)->first();
	}

	public function scopeByCounty($query, $county, $state)
	{
		return $query->where('county_id', $county)
					 ->where('state_id', $state)->first();
	}

	// public function city()
	// {
	// 	$this->cityobj = City::where('title', 'like', $this->place_name)->where('state_id', $this->state_id)->first();
	// 	return $this->cityobj;
	// }

	public function counties()
	{
		//return $this->spatiallyRelatesToMany('County', 'ContainedBy');
		return $this->belongsToMany(County::class, 'city_county', 'city_id', 'county_id');
	}

	public function scopeByKnownCity($query, $city) {
		return $query->where('simple_name', 'like', $city)->first();
	}

	public function scopeByCityOnly($query, $city)
	{
		return $query->where('place_name', 'like', $city)->first();
	}

	public static function forZipCode($str)
	{
		return static::select('geometry')->where('zipcode', strval($str))->first();
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function scopeWithinRadius($query, $val, $radius = 50, $column = 'id')
	{
		$midpointval = (is_a($val, Eloquent::class)) ? $val->$column : $val;
		return Geoname::hydrate(DB::select(DB::raw("SELECT locs.*, ST_Distance(locs.center_point::geography, origin.center_point::geography) AS distance FROM places AS origin LEFT JOIN places AS locs ON origin.id = ".$midpointval." AND ST_DWithin(locs.center_point::geography, origin.center_point::geography, ".$radius."*1609.34) ORDER BY ST_Distance(locs.center_point::geography, origin.center_point::geography) ASC"))->get());
	}

	public function scopeByDistance($query)
	{
		return $query->orderBy('distance', 'asc');
	}

	public function scopeWithinRegion($query, $region)
	{
		return $query->select(DB::raw('DISTINCT ON (place_name) places.*'))->join('regions', function($query) use ($region) {
			$query->on('regions.id', '=', DB::raw($region))
			->on(DB::raw('ST_Intersects(regions.geometry::geography, places.geometry::geography)'), '=', DB::raw('true'));
		});
	}

	public static function searchPlaces($query, $unique = true)
	{
		if($query == '') return [];

		$base = Geoname::join('states', 'places.state_id', '=', 'states.id')->select('place_name', 'states.abbr');
		if(strpos($query, ',') === false) {
			if(is_numeric($query) && strlen(strval($query)) == 5) {
				//$token = $base->where('zipcode', $query);

				/* Zippopotamus */
				$url = "https://api.zippopotam.us/us/".strval($query);

				$response = json_decode(file_get_contents($url), true);

				if(is_array($response) && array_key_exists('places', $response) && count($response['places']) > 0) {
					$is_zip = true;
					$place = $response['places'][0];
					$token = $base->where('place_name', 'ilike', $place['place name'])->where('states.abbr', 'ilike', $place['state abbreviation']);
				}else{
					return [];
				}
			}else{
				$token = $base->where('place_name', 'ilike', $query.'%');
			}

		}else{
			list($city, $state) = explode(',', $query);
			$city = trim($city);
			$state = trim($state);

			if($state == '') {
				$token = $base->where('place_name', 'ilike', $city);
			}elseif(strlen($state) == 1) {
				$token = $base->where('places.place_name', $city)->where('states.abbr', 'ilike', strtolower($state).'%');
			}elseif(strlen($state) == 2) {
				$token = $base->where('places.place_name', $city)->where('states.abbr', 'ilike', strtolower($state));
			}else{
				$token = $base->where('places.place_name', $city)->where('states.title', 'ilike', ucwords($state));
			}
		}

		$result = $token->orderBy('aland', 'DESC')->orderBy('place_name', 'ASC')->take(50)->get();
		if(is_object($result)) {
			$final_array = [];
			$ret = $result->toArray();
			for($x = 0; $x < count($ret); $x++) {
				$ret[$x]['title'] = $ret[$x]['place_name'].', '.strtoupper($ret[$x]['abbr']);
				if($unique == false || !in_array($ret[$x]['title'], array_column($final_array, 'title'))) {
					$final_array[] = $ret[$x];
				}
			}
			return $final_array;
		}
		return [];
	}

	public static function findLocation($input)
	{
		$states = [
			'AL'=>'ALABAMA',
			'AK'=>'ALASKA',
			'AZ'=>'ARIZONA',
			'AR'=>'ARKANSAS',
			'CA'=>'CALIFORNIA',
			'CO'=>'COLORADO',
			'CT'=>'CONNECTICUT',
			'DE'=>'DELAWARE',
			//'DC'=>'DISTRICT OF COLUMBIA',
			'FL'=>'FLORIDA',
			'GA'=>'GEORGIA',
			'HI'=>'HAWAII',
			'ID'=>'IDAHO',
			'IL'=>'ILLINOIS',
			'IN'=>'INDIANA',
			'IA'=>'IOWA',
			'KS'=>'KANSAS',
			'KY'=>'KENTUCKY',
			'LA'=>'LOUISIANA',
			'ME'=>'MAINE',
			'MD'=>'MARYLAND',
			'MA'=>'MASSACHUSETTS',
			'MI'=>'MICHIGAN',
			'MN'=>'MINNESOTA',
			'MS'=>'MISSISSIPPI',
			'MO'=>'MISSOURI',
			'MT'=>'MONTANA',
			'NE'=>'NEBRASKA',
			'NV'=>'NEVADA',
			'NH'=>'NEW HAMPSHIRE',
			'NJ'=>'NEW JERSEY',
			'NM'=>'NEW MEXICO',
			'NY'=>'NEW YORK',
			'NC'=>'NORTH CAROLINA',
			'ND'=>'NORTH DAKOTA',
			'OH'=>'OHIO',
			'OK'=>'OKLAHOMA',
			'OR'=>'OREGON',
			'PA'=>'PENNSYLVANIA',
			'PR'=>'PUERTO RICO',
			'RI'=>'RHODE ISLAND',
			'SC'=>'SOUTH CAROLINA',
			'SD'=>'SOUTH DAKOTA',
			'TN'=>'TENNESSEE',
			'TX'=>'TEXAS',
			'UT'=>'UTAH',
			'VT'=>'VERMONT',
			'VA'=>'VIRGINIA',
			'WA'=>'WASHINGTON',
			'WV'=>'WEST VIRGINIA',
			'WI'=>'WISCONSIN',
			'WY'=>'WYOMING'
		];

		$state_hotspots = [
			'ALABAMA' => ['Birmingham','Mobile'],
			'ALASKA' => ['Anchorage','Juneau'],
			'ARIZONA' => ['Tucson','Phoenix'],
			'ARKANSAS' => ['Little Rock'],
			'CALIFORNIA' => ['Riverside'],
			'COLORADO' => ['Denver'],
			'CONNECTICUT' => ['Bridgeport'],
			'DELAWARE' => ['Wilmington'],
			'FLORIDA' => ['Jacksonville'],
			'GEORGIA' => ['Augusta'],
			'HAWAII' => ['Honolulu'],
			'IDAHO' => ['Boise','Coeur d\'Alene'],
			'ILLINOIS' => ['Chicago'],
			'INDIANA' => ['Indianapolis'],
			'IOWA' => ['Des Moines'],
			'KANSAS' => ['Wichita'],
			'KENTUCKY' => ['Louisville'],
			'LOUISIANA' => ['Baton Rouge'],
			'MAINE' => ['Portland'],
			'MARYLAND' => ['Baltimore'],
			'MASSACHUSETTS' => ['Boston'],
			'MICHIGAN' => ['Detroit'],
			'MINNESOTA' => ['Minneapolis'],
			'MISSISSIPPI' => ['Jackson'],
			'MISSOURI' => ['Kansas City'],
			'MONTANA' => ['Billings'],
			'NEBRASKA' => ['Omaha'],
			'NEVADA' => ['Las Vegas','Reno'],
			'NEW HAMPSHIRE' => ['Manchester'],
			'NEW JERSEY' => ['Newark'],
			'NEW MEXICO' => ['Albuquerque','Roswell'],
			'NEW YORK' => ['Poughkeepsie'],
			'NORTH CAROLINA' => ['Winston-Salem'],
			'NORTH DAKOTA' => ['Fargo'],
			'OHIO' => ['Columbus'],
			'OKLAHOMA' => ['Tulsa','Oklahoma City'],
			'OREGON' => ['Eugene','Corvallis'],
			'PENNSYLVANIA' => ['Allentown'],
			'PUERTO RICO' => ['San Juan'],
			'RHODE ISLAND' => ['Pawtucket'],
			'SOUTH CAROLINA' => ['Columbia'],
			'SOUTH DAKOTA' => ['Sioux Falls','Rapid City'],
			'TENNESSEE' => ['Memphis','Nashville'],
			'TEXAS' => ['McAllen','Houston','El Paso','Odessa','Wichita Falls','Amarillo'],
			'UTAH' => ['Provo','Ogden'],
			'VERMONT' => ['Berlin'],
			'VIRGINIA' => ['Chesapeake'],
			'WASHINGTON' => ['Spokane','Tacoma','Yakima'],
			'WEST VIRGINIA' => ['Parkersburg','Charleston','Morgantown'],
			'WISCONSIN' => ['Madison'],
			'WYOMING' => ['Cheyenne']
		];

		$final_location = [];

		$is_zip = false;
		$zip_matches = [];
		$zip_format = preg_match('/^([\d]{5})$/', trim($input), $zip_matches);
		if($zip_format == 1) {

			/* Zippopotamus */
			$puerto_rico = false;
			$url = "https://api.zippopotam.us/us/".$zip_matches[1];

			$apireq = @file_get_contents($url);

			if($apireq === false && Str::startsWith($zip_matches[1], '00')) {
				$url = "https://api.zippopotam.us/pr/".$zip_matches[1];
				$apireq = @file_get_contents($url);
				$puerto_rico = true;
			}

			$results = json_decode($apireq, true);

			if(is_array($results) && array_key_exists('places', $results) && count($results['places']) > 0) {
				$is_zip = true;
				$place = $results['places'][0];

				$final_location = [
					'bounds' => false,
					'location' => [
						'lat' => $place['latitude'],
						'lon' => $place['longitude']
					],
					'title' => $place['place name'].', '.( $puerto_rico ? $place['country abbreviation'] : $place['state abbreviation'] ),
					'valid' => true,
					'zoom' => 13,
					'pitch' => 0
				];
			}
		}

		if(!$is_zip) {
			$city_matches = [];
			$city_state_format = preg_match('/([\p{L}\p{N}\'-]+(?: [\p{L}\p{N}\'-]+)*), ([\p{L}]+(?: [\p{L}]+)*)/i', trim($input), $city_matches);
			$city_state_format_alt = preg_match('/([\p{L}\p{N}\'-]+(?:,? ,?[\p{L}\p{N}\'-]+)*)/i', trim($input), $city_matches_alt);

			$is_city_match = ($city_state_format == 1 && ( in_array(strtoupper($city_matches[2]), $states) || array_key_exists(strtoupper($city_matches[2]), $states)));
			$is_general_match = ($city_state_format_alt == 1);
			$is_state_match = array_key_exists(strtoupper($input), $state_hotspots);

			if($is_city_match || $is_general_match || $is_state_match) {
				$match = '';
				if($is_city_match) {
					$match = $city_matches[0];
				}elseif($is_state_match) {
					$state_cities = $state_hotspots[strtoupper($input)];
					$chosen_city = $state_cities[array_rand($state_cities)];
					$match = $chosen_city.', '.$input;
				}elseif($is_general_match) {
					$match = $city_matches_alt[0];
				}

				$url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/'.urlencode($match).'.json?autocomplete=false&country=US&language=en&limit=1&types=locality,neighborhood,place&access_token=pk.eyJ1Ijoia2FnZWVkd2FyZHMiLCJhIjoiY2pzMjVpOGdnMTVkZzQ0bWc1eDhmZHI2ZiJ9.2jUXv-aCsmXEe3f73wBvvA';

				$results = json_decode(file_get_contents($url), true);
				
				$city_data = $results['features'][0];
				
				$city_name = '';
				$state_name = '';
				foreach ($city_data['context'] as $context) {
					if(strpos($context['id'], 'place.') === 0 || strpos($context['id'], 'locality.') === 0) {
						$city_name = $context['text'];
					}
					if(strpos($context['id'], 'region.') === 0) {
						$state_name = array_search(strtoupper($context['text']), $states);
					}
				}
				if(strpos($city_data['id'], 'place.') === 0) {
					$city_name = $city_data['text'];
				}elseif(strpos($city_data['id'], 'neighborhood.') === 0) {
					if($city_name == '') {
						$city_name = $city_data['text'];
					}else{
						$city_name = $city_data['text'].', '.$city_name;
					}
				}

				$final_location = [
					'bounds' => (is_array($city_data['bbox']) && count($city_data['bbox']) == 4) ? [
						[
							$city_data['bbox'][0],
							$city_data['bbox'][1]
						],
						[
							$city_data['bbox'][2],
							$city_data['bbox'][3]
						]
					] : false,
					'location' => [
						'lat' => $city_data['geometry']['coordinates'][1],
						'lon' => $city_data['geometry']['coordinates'][0]
					],
					'title' => ($city_name != '' && $state_name != '') ? $city_name.', '.$state_name : $city_data['place_name'], //($neighborhood_name != '' ? $neighborhood_name.', ' : '').($sublocality_name != '' ? $sublocality_name.', ' : '').$city_name.', '.$state_name,
					'valid' => true,
					'zoom' => $is_state_match ? 11 : 12,
					'pitch' => $is_state_match ? 45 : 0,
					'raw' => $results
				];
			}
		}

		return $final_location;
	}

}