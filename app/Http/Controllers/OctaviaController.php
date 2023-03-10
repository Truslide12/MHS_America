<?php namespace App\Http\Controllers;

use Auth;
use DB;
use Log;
use Response;
use URL;
use Validator;
use User;
use App\Models\Geoname;
use App\Models\Profile;
use App\Models\Plan;
use Input;
use Mail;
use Illuminate\Http\Request;
use Phaza\LaravelPostgis\Geometries\Point;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Database\Eloquent\Builder;

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

		$cities = Geoname::select(DB::raw('place_name AS title, ST_Y("center_point") AS latitude, ST_X("center_point") AS longitude'))->whereRaw('"center_point" && ST_MakeEnvelope('.$text.', 4269)')->get()->toArray();
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
								$query->select('id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'spaces' => function($query) {
								$query->select('id', 'profile_id', 'name', 'width', 'length', 'shape');
							}, 'homes' => function($query) {
								$query->select('id', 'profile_id', 'title', 'beds', 'baths', 'price');
							}, 'plan' => function($query) {
								$query->select('id');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.plan_id, profiles.pets, profiles.age_type, profiles.description, profiles.phone, profiles.address, profiles.zipcode, profiles.subscription_id, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'))->orderBy('profiles.plan_id', 'DESC');




		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->whereHas('homes', function(Builder $query) {
				$query->whereIn('status', [4, 5]);
			});
		}
		if(Input::get('filters.age', -1) >= 0 ) {
			switch (Input::get('filters.age', -1)) {
				case 0:
					$query = $query->where('profiles.age_type', 0);
					break;
				case 1:
					$query = $query->where('profiles.age_type', '>', 0);
					break;
				case 2:
					$query = $query->where('profiles.age_type', 2);
					break;
			}
		}

		$query = $query->whereRaw('"location" && ST_MakeEnvelope('.$text.', 4269) AND type = \'Community\'');


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
										    ->whereIn('status', [4, 5])
										    ->get();
				
			} else {
				$homes = $community->homes()->whereIn('status', [4, 5])->get();
			}


			if((int)Input::get('filters.width', 0) > 0 ) {
				$spaces = $community->spaces->where('shape', (int)Input::get('filters.width', 0) )->all();
				//if( count($spaces) == 0 ) { continue; }
			} else {
				$spaces = $community->spaces;
			}

			if ( ! $community->phone || strlen($community->phone) != 10 || ! is_numeric($community->phone)) {
				$phone_formatted = '';
			} else {
				$phone_formatted = $community->phone;
			}

			$feature = [
				'type' => 'Feature',
				'properties' => [
					'id' => $community->id,
					'title' => $community->title,
					'city' => $community->city->place_name,
					'state' => $community->state->abbr,
					'photos' => $community->plan->hasFeature('manage_photos') ? [$community->photos()->first()] : [null],
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
								$query->select('id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'homes' => function($query) {
								$query->select('id', 'profile_id', 'title', 'beds', 'baths', 'price', 'shape', 'square_footage', 'photos');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.pets, profiles.age_type, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'));


		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', -1) >= 0 ) {
			switch (Input::get('filters.age', -1)) {
				case 0:
					$query = $query->where('profiles.age_type', 0);
					break;
				case 1:
					$query = $query->where('profiles.age_type', '>', 0);
					break;
				case 2:
					$query = $query->where('profiles.age_type', 2);
					break;
			}
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
										    ->whereIn('status', [4, 5])
										    ->get();
				
			} else {
				$homes = $community->homes()->whereIn('status', [4, 5])->get();
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
								$query->select('id', 'place_name');
							}, 'state' => function($query) {
								$query->select('id', DB::raw('upper(abbr) AS abbr'), 'title');
							}, 'spaces' => function($query) {
								$query->select('id', 'profile_id', 'name', 'width', 'length', 'shape');
							}])
						->addSelect(DB::raw('profiles.id, profiles.title, profiles.city_id, profiles.state_id, profiles.pets, profiles.age_type, profiles.description, profiles.phone, profiles.address, profiles.zipcode, regexp_replace(st_astext(profiles.service_area), \'[A-Z()]\', \'\', \'g\') as service_area, ST_Y(location::geometry) AS latitude, ST_X(location::geometry) AS longitude'));


		if(Input::get('filters.pets', 0) == 1) {
			$query = $query->where('profiles.pets', true);
		}
		if(Input::get('filters.spaces', 0) == 1) {
			$query = $query->has('spaces');
		}
		if(Input::get('filters.homes', 0) == 1) {
			$query = $query->has('homes');
		}
		if(Input::get('filters.age', -1) >= 0 ) {
			switch (Input::get('filters.age', -1)) {
				case 0:
					$query = $query->where('profiles.age_type', 0);
					break;
				case 1:
					$query = $query->where('profiles.age_type', '>', 0);
					break;
				case 2:
					$query = $query->where('profiles.age_type', 2);
					break;
			}
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
				//just demo
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
								$query->select('id', 'place_name');
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
				$phone_formatted = $community->phone;
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


	public function postProcessIncomingStripeWebhook(Request $request)
	{
		$data = $request->json()->all();

		/* TODO: Implement signature verification
		 * https://stripe.com/docs/webhooks/signatures#verify-official-libraries
		 */

		/*
			Additional security

			//Webhook IPs
			54.187.174.169
			54.187.205.235
			54.187.216.72
			54.241.31.99
			54.241.31.102
			54.241.34.107
		*/

		if($data['object'] == 'event' && is_array($data['data']['object'])) {
			$event_id = $data['id'];
			$object = $data['data']['object'];

			Log::channel('slack')->warning('Webhook: '.$data['type'], ['object' => json_encode($object || [], JSON_PRETTY_PRINT)]);

			switch ($data['type']) {
				case 'balance.available':
					if ($object['object'] == 'balance') {
						// SAVE FOR DISPLAY ON ADMIN DASHBOARD *shrug*
						// $object['available']['amount']
						// $object['pending']['amount']
					}
					break;
				case 'charge.dispute.closed':
				case 'charge.dispute.created':
				case 'charge.dispute.funds_reinstated':
				case 'charge.dispute.funds_withdrawn':
				case 'charge.dispute.updated':
					if ($object['object'] == 'dispute') {
						// I dunno yet. *shrug*
					}
					break;
				case 'customer.subscription.created':
				case 'customer.subscription.deleted':
				case 'customer.subscription.updated':
				case 'customer.subscription.trial_will_end':
					if ($object['object'] == 'subcription') {
						// UPDATE SUBSCRIPTION AS NEEDED

						//Subscription has ended
						if(!is_null($object['ended_at'])) {
							// $object['id']
						}
					}
					break;
				default:
					// Nothing
					break;
			}
		}

		return $this->jsonAPI([]);
	}

}