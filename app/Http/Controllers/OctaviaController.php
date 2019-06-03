<?php namespace App\Http\Controllers;

use Auth;
use DB;
use Request;
use Response;
use URL;
use Validator;
use User;
use App\Models\Geoname;
use App\Models\Profile;
use Input;
use Mail;
use Phaza\LaravelPostgis\Geometries\Point;



class OctaviaController extends Pony {
	
	protected function jsonAPI($data, $http_status = 200, $json_type = null)
	{
		$json_opts = (Input::get('format', '') == 'pretty') ? JSON_PRETTY_PRINT : 0;
		$output_array = ['success' => true, 'data' => $data];
		return Response::json($output_array, $http_status, [], $json_opts)->withHeaders(['Content-Type' => 'application/vnd.api+json']);
	}

	public function postFetchCities()
	{
		$limits = Input::get('limits');

		$text = $limits['sw']['lng'].', '.$limits['sw']['lat'].', '.$limits['ne']['lng'].', '.$limits['ne']['lat'];

		$cities = Geoname::select(DB::raw('place_name AS title, ST_Y("geometry") AS latitude, ST_X("geometry") AS longitude'))->whereRaw('"geometry" && ST_MakeEnvelope('.$text.', 4326) AND "enabled" = 1')->get()->toArray();
		//Fetch communities in this region
		//Return successful array
		return $this->jsonAPI($cities);
	}

	public function postFetchLocation()
	{
		$input = Input::get('address');

		return $this->jsonAPI(Geoname::findLocation($input));
	}

	public function pointformat($d){
		$b = [];
		$t = explode(",", $d);
		foreach($t as $a) {
			$b[count($b)] = explode(" ", $a);
		}
		foreach( $b as $k => $x ) {
			foreach( $b[$k] as $h => $i ) {
				$b[$k][$h] = floatval($i);
			}
		}
		return $b;
	}

	public function postFetchCommunities()
	{
		$limits = Input::get('limits');
		$text = $limits['sw']['lng'].', '.$limits['sw']['lat'].', '.$limits['ne']['lng'].', '.$limits['ne']['lat'];

		$query = Profile::with('photos')
						->with(
							['city' => function($query) {
								$query->select('id', 'osm_id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'spaces' => function($query) {
								$query->select('id', 'profile_id', 'name', 'width', 'length', 'shape');
							}, 'homes' => function($query) {
								$query->select('id', 'profile_id', 'title', 'beds', 'baths', 'price');
							}, 'plan' => function($query) {
								$query->select('id');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.plan_id, profiles.pets, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'))->orderBy('profiles.plan_id');




		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', 0) > 0 ) {
			$query = $query->where('profiles.age_type', Input::get('filters.age'));
		}

		$query = $query->whereRaw('"location" && ST_MakeEnvelope('.$text.', 4326) AND type = \'Community\'');


		$communities = $query->get();
						
		//$query = Profile::all();
		$features = [];
		foreach ($communities as $community) {
			//$spaces = $community->spaces;
			//$homes = $community->homes;
			//return (int)Input::get('filters.max', 0);
			if( (int)Input::get('filters.max', 0) > 0  ||
				(int)Input::get('filters.beds', 0) > 0 ||
				(int)Input::get('filters.baths', 0) > 0 ) {

				$homes = $community->homes()->where('price', 	"<=", 	(int)Input::get('filters.max', 0) )
										    ->where('beds', 	">=", 	(int)Input::get('filters.beds', 0) )
										    ->where('baths', 	">=", 	(int)Input::get('filters.baths', 0) )
										    ->where('status', 	">", 	0 )
										    ->get();
				
			} else {
				$homes = $community->homes()->where('status', ">", 	0 )->get();
			}


			if((int)Input::get('filters.width', 0) > 0 ) {
				$spaces = $community->spaces->where('shape', (int)Input::get('filters.width', 0) )->all();
				//if( count($spaces) == 0 ) { continue; }
			} else {
				$spaces = $community->spaces;
			}

			if ( ! $community->phone || strlen($community->phone) != 10 || ! is_numeric($community->phone)) {
				$phone_formatted = "Unknown";
			} else {
				$phone_formatted = phone($community->phone, ['US'], 2);
			}
			$feature = [
				'type' => 'Feature',
				'properties' => [
					'id' => $community->id,
					'title' => $community->title,
					'city' => $community->city->place_name,
					'state' => $community->state->abbr,
					'photos' => [$community->photos()->first()],
					'spaces' => $spaces,
					'homes' => $homes,
					'address' => $community->address,
					'zipcode' => $community->zipcode,
					'phone' => $phone_formatted,
					'description' => $community->description,
					'service_area' => self::pointformat($community->service_area),
					'highlight' => $community->plan->hasFeature('highlight')
				],
				'geometry' => [
					'type' => 'Point',
					'coordinates' => [
						$community->longitude,
						$community->latitude
					]
				]
			];

			//if(count($spaces) > 0) $feature['properties']['space_count'] = count($spaces);
			$feature['properties']['space_count'] = (count($spaces) > 0 ? count($spaces) : 0);
			$feature['properties']['home_count'] = (count($homes) > 0 ? count($homes) : 0);
			
			$features[] = $feature;
		}

		return $this->jsonAPI(['type' => 'FeatureCollection', 'features' => $features]);
	}

	public function sizeshape($size) {
		$shapes = Array('Single Wide', 'Single Wide', 'Double Wide', 'Triple Wide');
		return $shapes[$size];
	}

	public function postFetchHomes()
	{
		$limits = Input::get('limits');
		$text = $limits['sw']['lng'].', '.$limits['sw']['lat'].', '.$limits['ne']['lng'].', '.$limits['ne']['lat'];

		$query = Profile::with(
							['city' => function($query) {
								$query->select('id', 'osm_id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'homes' => function($query) {
								$query->select('id', 'profile_id', 'title', 'beds', 'baths', 'price', 'shape', 'square_footage', 'photos');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.pets, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'));


		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', 0) > 0 ) {
			$query = $query->where('profiles.age_type', Input::get('filters.age'));
		}

		$query = $query->whereRaw('"location" && ST_MakeEnvelope('.$text.', 4326) AND type = \'Community\'');


		$communities = $query->get();
						
		//$query = Profile::all();
		$features = [];
		foreach ($communities as $community) {
			if( (int)Input::get('filters.max', 0) > 0  ||
				(int)Input::get('filters.beds', 0) > 0 ||
				(int)Input::get('filters.baths', 0) > 0 ) {

				$homes = $community->homes()->where('price', 	"<=", 	(int)Input::get('filters.max', 0) )
										    ->where('beds', 	">=", 	(int)Input::get('filters.beds', 0) )
										    ->where('baths', 	">=", 	(int)Input::get('filters.baths', 0) )
										    ->where('status', 	">", 	0 )
										    ->get();
				
			} else {
				$homes = $community->homes()->where('status', ">", 	0 )->get();
			}
			foreach ($homes as $home) {
				$feature = [
					'id' => $home->id,
					'title' => $home->title,
					'photos' => json_decode($home->photos),
					'community' => $community->title,
					'community_id' => $community->id,
					'beds' => $home->beds,
					'baths' => $home->baths,
					'size' => self::sizeshape($home->shape),
					'square_footage' => $home->square_footage,
					'price' => $home->price,
					'city' => $community->city->place_name,
					'state' => $community->state->abbr,
				];
				
				$features[] = ['properties' => $feature];
			}
		}

		return $this->jsonAPI(['type' => 'FeatureCollection', 'features' => $features]);
	}

	public function postFetchSpaces()
	{
		$limits = Input::get('limits');
		$text = $limits['sw']['lng'].', '.$limits['sw']['lat'].', '.$limits['ne']['lng'].', '.$limits['ne']['lat'];

		$query = Profile::with(
							['city' => function($query) {
								$query->select('id', 'osm_id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'spaces' => function($query) {
								$query->select('id', 'profile_id', 'name', 'width', 'length', 'shape');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.pets, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'));


		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', 0) > 0 ) {
			$query = $query->where('profiles.age_type', Input::get('filters.age'));
		}

		$query = $query->whereRaw('"location" && ST_MakeEnvelope('.$text.', 4326) AND type = \'Community\'');


		$communities = $query->get();
						
		//$query = Profile::all();
		$features = [];
		foreach ($communities as $community) {
			if(Input::get('filters.width', 0) > 0 ) {
				$spaces = $community->spaces->where('shape', (int)(Input::get('filters.width')) );
			} else {
				$spaces = $community->spaces;
			}
			foreach ($spaces as $space) {
				#just demo
				if($space->id == 2) {
					$photo = "img/stockphotos/stolen.jpg";
					$price = "$500";
					$type = "Monthly";
					$price = $price." ".$type;
				} else {
					$photo = null;
					$price = null;
					$type = null;
				}
				###

				$feature = [
					'id' => $space->id,
					'title' => $space->name,
					//'photos' => json_decode($community->photos),
					'community' => $community->title,
					'community_id' => $community->id,
					'name' => $space->name,
					'width' => $space->width,
					'length' => $space->length,
					'shape' => $space->shape,
					'size' => self::sizeshape($space->shape),
					'photo' => $photo,
					'price' => $price,
					'type' => $type,
				];
				
				$features[] = ['properties' => $feature];
			}
		}


		return $this->jsonAPI(['type' => 'FeatureCollection', 'features' => $features]);
	}

	public function postSendMessage() {
		Mail::raw(Input::get('message', ''), function($message) {
			$message->from(Input::get('email', 'void@void.net'), Input::get('name', 'No Name'));
			$message->sender(Input::get('email', 'void@void.net'), Input::get('name', 'No Name'));
			$message->replyTo(Input::get('email', 'void@void.net'), Input::get('name', 'No Name'));
			
			$message->to('contact@mhsamerica.com', 'MHS Contact');

			$message->subject('Contact Form Message');
		});

		return $this->jsonAPI([]);
	}




	public function getFetchForEsri()
	{
		$lat = (float)Input::get('lat');
		$lon = (float)Input::get('lon');

		$text = ($lat-1).', '.($lon-1).', '.($lat+1).', '.($lon+1);
		//return $text;
		$query = Profile::with('photos')
						->with(
							['city' => function($query) {
								$query->select('id', 'osm_id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'spaces' => function($query) {
								$query->select('id', 'profile_id', 'name', 'width', 'length', 'shape');
							}, 'homes' => function($query) {
								$query->select('id', 'profile_id', 'title', 'beds', 'baths', 'price');
							}, 'plan' => function($query) {
								$query->select('id');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.plan_id, profiles.pets, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'))->orderBy('profiles.plan_id');




		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', 0) > 0 ) {
			$query = $query->where('profiles.age_type', Input::get('filters.age'));
		}

		$query = $query->whereRaw('"location" && ST_MakeEnvelope('.$text.', 4326) AND type = \'Community\'');


		$communities = $query->get();
						
		$features = [];
		foreach ($communities as $community) {

			if( (int)Input::get('filters.max', 0) > 0  ||
				(int)Input::get('filters.beds', 0) > 0 ||
				(int)Input::get('filters.baths', 0) > 0 ) {

				$homes = $community->homes()->where('price', 	"<=", 	(int)Input::get('filters.max', 0) )
										    ->where('beds', 	">=", 	(int)Input::get('filters.beds', 0) )
										    ->where('baths', 	">=", 	(int)Input::get('filters.baths', 0) )
										    ->where('status', 	">", 	0 )
										    ->get();
				
			} else {
				$homes = $community->homes()->where('status', ">", 	0 )->get();
			}


			if((int)Input::get('filters.width', 0) > 0 ) {
				$spaces = $community->spaces->where('shape', (int)Input::get('filters.width', 0) )->all();
				//if( count($spaces) == 0 ) { continue; }
			} else {
				$spaces = $community->spaces;
			}

			if ( ! $community->phone || strlen($community->phone) != 10 || ! is_numeric($community->phone)) {
				$phone_formatted = "Unknown";
			} else {
				$phone_formatted = phone($community->phone, ['US'], 2);
			}
			$feature = [
				'type' => 'Feature',
				'properties' => [
					'id' => $community->id,
					'title' => $community->title,
					'city' => $community->city->place_name,
					'state' => $community->state->abbr,
					'photos' => [$community->photos()->first()],
					'spaces' => $spaces,
					'homes' => $homes,
					'address' => $community->address,
					'zipcode' => $community->zipcode,
					'phone' => $phone_formatted,
					'description' => $community->description,
					'service_area' => self::pointformat($community->service_area),
					'highlight' => $community->plan->hasFeature('highlight')
				],
				'geometry' => [
					'type' => 'Point',
					'coordinates' => [
						$community->longitude,
						$community->latitude
					]
				]
			];

			$feature['properties']['space_count'] = (count($spaces) > 0 ? count($spaces) : 0);
			$feature['properties']['home_count'] = (count($homes) > 0 ? count($homes) : 0);
			
			$features[] = $feature;
		}

		return (['type' => 'FeatureCollection', 'features' => $features]);
	}


}