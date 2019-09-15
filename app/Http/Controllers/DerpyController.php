<?php namespace App\Http\Controllers;

//use Api\Profile as ProfileAPI;
use Auth;
use App\Models\City;
use App\Models\County;
use App\Models\Company;
use Exception;
use Input;
use App\Models\Profile;
use App\Models\Home;
use App\Models\Space;
use Response;
use App\Models\State;
//use ZipCode;
use App\Models\Geoname;
use DB;
use View;
use App\Models\Amenities;
use Illuminate\Database\Eloquent\Model as Eloquent;

class DerpyController extends Pony {

	public static $watchTypes = array(
		'profile',
		'company',
		'space',
		'home'
	);

	public static $kudosTypes = array(
		'profile',
		'company',
		'home'
	);

	public static $messageTypes = array(
		'profile',
		'company'
	);

	protected function jsonAPI($data, $http_status = 200, $json_type = null)
	{
		$json_opts = (Input::get('format', '') == 'pretty') ? JSON_PRETTY_PRINT : 0;
		$output_array = ['success' => true, 'data' => $data];
		return Response::json($output_array, $http_status, [], $json_opts)->withHeaders(['Content-Type' => 'application/vnd.api+json']);
	}

	public function getStates()
	{
		return Response::json(State::orderBy('title', 'asc')->get()->toArray(), 200);
	}

	public function getAmenities()
	{
		return Response::json(Amenities::where('title', 'like', Input::get('query').'%')->get()->toArray(), 200);
	}

	public function getCompanies($company_name=null, $company_id=null)
	{
		//if we dont want a particular companies data, lets query..
		if ( !$company_id && !$company_name) {
			$data = Company::where('companies.title', 'ilike', Input::get('query').'%')
							->where('companies.is_private', '=', FALSE)
							->leftJoin('states', 'companies.state_id', '=', 'states.id')
							->leftJoin('users', 'companies.state_id', '=', 'users.id')
							->leftJoin('places', DB::raw('places.id::bigint'), '=', 'companies.city_id')
							->select('users.username', 'companies.id', 'companies.name', 'companies.title', 'companies.claimed', 'companies.zip_code', 'companies.city_id', 'companies.phone', 'companies.street_addr', 'states.title as state', 'places.place_name as city')
							->get()->toArray();
			return Response::json($data, 200);
		}

		$data = Company::where('id',  $company_id)->where('name',  $company_name)->select('id', 'name', 'title', 'street_addr', 'street_addr2', 'zip_code', 'claimed', 'phone', 'fax', 'state_id', 'city_id', 'lockout' )->get()->toArray();
		$data[0]['city_name'] = Geoname::where('id', $data[0]['city_id'] )->pluck('place_name')->first();;
		$data[0]['state_name'] = State::where('id', $data[0]['state_id'])->pluck('title')->first();

		return Response::json($data, 200);

	}

	public function getCommunities($company_name=null, $company_id=null)
	{
		//if we dont want a particular companies data, lets query..
		if ( !$company_id && !$company_name) {
			$data = Profile::where('profiles.title', 'ilike', Input::get('query').'%')
							->where('profiles.type', '=', 'Community')
							->leftJoin('states', DB::raw('profiles.state_id::bigint'), '=', 'states.id')
							->leftJoin('places', DB::raw('places.id::bigint'), '=', 'profiles.city_id')
							->select('profiles.id', 'profiles.title',  'profiles.zipcode', 'states.title as state', 'places.place_name as city')
							->get()->toArray();

			$data[] = [ "id"=>-1,"title"=>"test", "city"=>"yucaipa", "state"=> "ca", "zipcode"=>00000];
			return Response::json($data, 200);
		}

		$data = Profile::where('profiles.id',  $company_id)->where('profiles.zipcode',  $company_name)
							->leftJoin('states', DB::raw('profiles.state_id::bigint'), '=', 'states.id')
							->leftJoin('places', DB::raw('places.id::bigint'), '=', 'profiles.city_id')
							->select('profiles.*', 'states.title as state', 'places.place_name as city')
							->get()->toArray();

		$data[0]['cover'] = Profile::where('id', $company_id)->first()->photos->first()->cover ?? null;
		$data[0]['claimed'] = Profile::where('id', $company_id)->first()->is_claimed();
		$data[0]['premium'] = Profile::where('id', $company_id)->first()->has_active_subscription();

		return Response::json($data, 200);

	}

	public function getCitiesByState($state)
	{
		if($state != 'pr') {
			$stateobj = State::byAbbr($state);
			if(!is_object($stateobj)) return Response::json([], 200);
		}
		if(Input::get('query', '') == '') {
			$cities = Geoname::select([DB::raw('DISTINCT ON (place_name) 1 AS what'), 'places.id', 'places.place_name', 'places.state_id'])->where('state_id', ($state == 'pr' ? 51 : $stateobj->id ) )->orderBy('place_name', 'asc')->get();
		}else{
			$query = Input::get('query', '');
			if(is_numeric($query) && strlen(strval($query)) == 5 && $state != 'pr') {
				
				/* Zippopotamus */
				$url = "https://api.zippopotam.us/us/".strval($query);

				$response = json_decode(file_get_contents($url), true);

				if(is_array($response) && array_key_exists('places', $response) && count($response['places']) > 0) {
					$place = $response['places'][0];
					
					//Must be in requested state
					if(strtolower($place['state abbreviation']) == strtolower($stateobj->abbr)) {
						$cities = Geoname::select([DB::raw('DISTINCT ON (place_name) 1 AS what'), 'places.id', 'places.place_name', 'places.state_id'])->where('state_id', $stateobj->id )->where('place_name', 'ilike', $place['place name'])->orderBy('place_name', 'asc')->get();
					}else{
						$cities = [];
					}
				}else{
					$cities = [];
				}
			}else{
				$cities = Geoname::select([DB::raw('DISTINCT ON (place_name) 1 AS what'), 'places.id', 'places.place_name', 'places.state_id'])->where('state_id', ($state == 'pr' ? 51 : $stateobj->id ) )->where('place_name', 'ilike', Input::get('query').'%')->orderBy('place_name', 'asc')->get();
			}
		}
		$cityArray = array();
		foreach($cities as $city) {
			if($city->place_name != '') {
				$cityArray[] = array('name' => $city->id, 'title' => $city->place_name);
			}
		}

		return Response::json($cityArray, 200);
	}


	public function getCitiesByCounty($state, $county)
	{
		$county = State::byAbbr($state)->counties()->where('name', $county)->firstOrFail();

		$cities = $county->cities()->select([DB::raw('DISTINCT ON (place_name) 1'),'places.*'])->orderBy('place_name', 'asc')->get();

		$cityArray = array();
		foreach($cities as $city) {
			if($city->place_name != '') {
				$cityArray[] = array('name' => $city->name, 'title' => $city->place_name);
			}
		}
		
		return Response::json($cityArray, 200);
	}

	public function getCounties($state)
	{
		if(Input::has('query')) {
			$counties = State::byAbbr($state)->counties()->select('name', 'title', 'suffix')->where('title', 'like', Input::get('query').'%')->az()->get();
		}else{
			$counties = State::byAbbr($state)->counties()->select('name', 'title', 'suffix')->az()->get();
		}			
		$countyArray = array();
		foreach($counties as $county) {
			if(strtolower($county['suffix']) == 'city') $county['title'] .= ' City';
			$countyArray[] = $county;
		}
		
		return Response::json($countyArray, 200);
	}

	// public function getCities()
	// {
	// 	$city_requested = Input::get('query');
	// 	if(strpos(Input::get('query'), ',') === false) {
	// 		if(is_numeric(Input::get('query')) && strlen(strval(Input::get('query'))) == 5) {
	// 			ZipCode::setCountry('US');
	// 			//ZipCode::setPreferredWebService('Zippopotamus');

	// 			$result = ZipCode::find(Input::get('query'));
	// 			if(is_object($result)) {
	// 				$res = $result->toArray();
	// 				$city_requested = $res['addresses'][0]['city'].', '.$res['addresses'][0]['state_id'];
	// 				//return Response::json($res, 200);
	// 			}
	// 		}else{
	// 			$cities = City::with('state')->where('title', 'like', $city_requested.'%')->orderBy('title')->take(5)->get();
	// 			$cityArray = array();
	// 			foreach($cities as $city) {
	// 				$cityArray[] = array('name' => $city->name, 'title' => $city->title. ', '. strtoupper($city->state->abbr));
	// 			}
	// 		}
	// 	}
	// 	if(strpos($city_requested, ',') !== false) {
	// 		$input = explode(',', $city_requested);
	// 		$input[0] = trim($input[0]);
	// 		$input[1] = trim($input[1]);
	// 		$cities = City::leftJoin('states', 'states.id', '=', 'cities.state_id')
	// 						->select('cities.title', 'cities.name', 'states.abbr', 'states.title as statetitle')
	// 						->where('cities.title', '=', $input[0])
	// 						->where('states.abbr', 'like', $input[1].'%') //->orWhere('states.title', 'like', $input[1].'%')
	// 						->orderBy('cities.title')->orderBy('states.abbr')->take(5)->get();
	// 		$cityArray = array();
	// 		foreach($cities as $city) {
	// 			$cityArray[] = array('name' => $city->name, 'title' => $city->title. ', '. strtoupper($city->abbr));
	// 		}
	// 	}
	// 	return Response::json($cityArray, 200);
	// }
	
	public function getCities()
	{
		return Response::json(Geoname::searchPlaces( Input::get('query', '') ), 200);
	}

	public function getRegions($state)
	{
		$regions = State::byAbbr($state)->regions()->where('disabled',0)->get()->toArray();

		return Response::json($regions, 200);
	}

	public function getRadius()
	{
		$radius = (Input::has('radius') && is_numeric(Input::get('radius')) && Input::get('radius') > 4 && Input::get('radius') < 101) ? floor(Input::get('radius')) : 25;

		if(Input::get('query', '') == '') return Response::json([], 200);

		$city_requested = Input::get('query');
		if(strpos(Input::get('query'), ',') === false) {
			if(is_numeric(Input::get('query')) && strlen(strval(Input::get('query'))) == 5) {
				$token = Geoname::where('zipcode', Input::get('query'))->first();
			}else{
				$token = Geoname::where('place_name', 'like', $city_requested.'%')->first();
			}
		}else{
			list($city, $state) = explode(',', $city_requested);
			$city = trim($city);
			$state = trim($state);

			if($state == '') {
				$token = Geoname::where('place_name', 'like', $city)->first();
			}elseif(strlen($state) == 1) {
				$token = Geoname::join('states', 'geonames.state_id', '=', 'states.id')->where('geonames.place_name', $city)->where('states.abbr', 'like', strtolower($state).'%')->first();
			}elseif(strlen($state) == 2) {
				$token = Geoname::join('states', 'geonames.state_id', '=', 'states.id')->where('geonames.place_name', $city)->where('states.abbr', 'like', strtolower($state))->first();
			}else{
				$token = Geoname::join('states', 'geonames.state_id', '=', 'states.id')->where('geonames.place_name', $city)->where('states.title', 'like', ucwords($state))->first();
			}
		}
		if(isset($token) && is_object($token)) {
			$the_array = Geoname::join('states', 'geonames.state_id', '=', 'states.id')->selectDistance($token->zipcode, 'zipcode', 'zipcode, (place_name || \', \' || upper("mhs_states"."abbr")) as title, place_name, "mhs_states"."title" AS state_name')->withinRadius($token->zipcode, $radius, 'zipcode')->orderBy('distance', 'asc')->get()->toArray();
			if(Input::has('unique')) {
				$final_array = [];
				for( $x=0; $x < count($the_array); $x++ ) {
					if(!in_array($the_array[$x]['title'], array_column($final_array, 'title'))) {
						$final_array[] = $the_array[$x];
					}
					
				}
				return Response::json($final_array, 200);
			}
			return Response::json($the_array, 200);
		}
		return Response::json([], 200);
	}

	public function getProfile($id)
	{
		$response = array(
			'success' => false,
			'error' => false,
			'data' => array()
		);

		try {
			$profile = Profile::find($id);

			if(!is_object($profile)) {
				return Response::json($response, 200);
			}


			$response['success'] = true;
			$response['error'] = false;
			$response['data'] = $profile->toArray();
			$response['data']['city'] = $profile->city()->pluck('title') . ', ' . strtoupper($profile->state()->pluck('abbr'));

			return Response::json($response, 200);
		} catch (Exception $e) {
			return Response::json(array('success' => false, 'error' => true, 'data' => $e->getMessage()), 200);
		}

	}

	public function getCompany($id)
	{
		$response = array(
			'data' => array(),
			'success' => false
		);

		$company = Company::find($id);

		if(is_object($company)) {
			$response['data'] = $company->toArray();
			$response['success'] = true;
		}else{
			$response['data'] = array();
			$response['success'] = false;
		}

		return Response::json($response, 200);
	}

	public function postWatch($relation, $id)
	{
		if(!in_array($relation, DerpyController::$watchTypes))
		{
			return Response::json(array('success' => false));
		}

		$user = Auth::user();
		$btnLabel = false;
		$watchCount = 0;
		$watchStatus = 'none';

		switch($relation) {
			case 'profile':
				$profile = Profile::find($id);
				if(is_a($profile, Eloquent::class) && $user->toggleWatchProfile($profile)) {
					if(Input::has('small')){
						$type = '';
					}elseif($profile->type == 'Community') {
						$type = ' community';
					}else{
						$type = '';
					}
					if($user->watchesProfile($profile)) {
						$ret = 'Unwatch<span class="hidden-xs">'.$type.'</span>';
						$watchStatus = 'on';
					}else{
						$ret = '<span class="btn-label"><i class="fa fa-star"></i></span> Watch<span class="hidden-xs">'.$type.'</span>';
						$btnLabel = true;
						$watchStatus = 'off';
					}
					$watchCount = $profile->watchers()->count();
				}
				break;
			case 'company':
				$company = Company::find($id);
				if(is_a($company, Eloquent::class) && $user->toggleWatchCompany($company)) {
					if($user->watchesCompany($company)) {
						$ret = 'Unwatch<span class="hidden-xs"> company</span>';
						$watchStatus = 'on';
					}else{
						$ret = '<span class="btn-label"><i class="fa fa-star"></i></span> Watch<span class="hidden-xs"> community</span>';
						$btnLabel = true;
						$watchStatus = 'off';
					}
					$watchCount = $company->watchers()->count();
				}
				break;
			case 'space':
				$space = Space::find($id);
				if(is_a($space, Eloquent::class) && $user->toggleWatchSpace($space)) {
					if($user->watchesSpace($space)) {
						$ret = 'Unwatch<span class="hidden-xs"> space</span>';
						$watchStatus = 'on';
					}else{
						$ret = '<span class="btn-label"><i class="fa fa-star"></i></span> Watch<span class="hidden-xs"> space</span>';
						$btnLabel = true;
						$watchStatus = 'off';
					}
					$watchCount = $space->watchers()->count();
				}
				break;
				return Response::json(array('success' => false));
			case 'home':
				$home = Home::find($id);
				if(is_a($home, Eloquent::class) && $user->toggleWatchHome($home)) {
					if($user->watchesHome($home)) {
						$ret = Input::get('size') == 'small' ? 'Unwatch' : 'Unwatch<span class="hidden-xs"> Home</span>';
						$watchStatus = 'on';
					}else{
						$ret = Input::get('size') == 'small' ? 'Watch' : '<span class="btn-label"><i class="fa fa-star"></i></span> Watch<span class="hidden-xs"> Home</span>';
						$btnLabel = (Input::get('size') != 'small');
						$watchStatus = 'off';
					}
					$watchCount = $home->watchers()->count();
				}
				break;
		}

		return $this->jsonAPI(array('status' => $watchStatus, 'content' => $ret, 'relation' => $relation, 'itemid' => $id, 'labeled' => $btnLabel, 'count' => $watchCount ));
	}

	public function postKudos($relation, $id)
	{
		if(!in_array($relation, DerpyController::$kudosTypes))
		{
			return Response::json(array('success' => false));
		}

		$user = Auth::user();
		$btnLabel = false;

		switch($relation) {
			case 'profile':
				$profile = Profile::find($id);
				if(is_a($profile, 'Eloquent') && $user->toggleKudoProfile($profile)) {
					if($user->kudosProfile($profile)) {
						$ret = '<i class="fa fa-check"></i> Liked';
					}else{
						$ret = '<span class="btn-label"><i class="fa fa-heart"></i></span> Like';
						$btnLabel = true;
					}
				}
				break;
			case 'company':
				$company = Company::find($id);
				if(is_a($company, 'Eloquent') && $user->toggleKudoCompany($company)) {
					if($user->kudosCompany($company)) {
						$ret = '<i class="fa fa-check"></i> Liked';
					}else{
						$ret = '<span class="btn-label"><i class="fa fa-heart"></i></span> Like';
						$btnLabel = true;
					}
				}
				break;
			case 'home':
				$home = Home::find($id);
				if(is_a($home, 'Eloquent') && $user->toggleKudoHome($home)) {
					if($user->kudosHome($home)) {
						$ret = 'Liked';
					}else{
						$ret = 'Like';
					}
				}
				break;
		}

		return $this->jsonAPI(array('content' => $ret, 'relation' => $relation, 'itemid' => $id, 'labeled' => $btnLabel ));
	}

	public function postProfileForm($profiletype)
	{
		$amenities = Amenities::orderBy("order")->take(16)->get();
		$ret = View::make('account.business.company.partials.forms.'.$profiletype)->with('amenities', $amenities)->render();

		return $this->jsonAPI(['content' => $ret]);
	}

	public function postHomeForm($formname)
	{
		$profile = Profile::find(5);//test
		$home = Home::find(3);//test
		$ret = View::make('editor.partials.forms.'.$formname , ['profile' => $profile, 'home' => $home])->render();

		return $this->jsonAPI(['content' => $ret]);
	}

	public function getBusinessSpace(Profile $profile, Space $space)
	{
		if($space->profile_id != $profile->id) {
			return Response::json(array('success' => false));
		}else{
			return $this->jsonAPI([
				'id' => $space->id,
				'title' => $space->name,
				'width' => $space->width,
				'depth' => $space->length,
				'shape' => $space->shape,
				'taken' => $space->is_taken
			]);
		}
	}
	

	public function getLatestHomes($zip = null)
	{

		if ( $zip === null ) {
			//latest on site
			$h = Home::orderBy('id', 'DESC')
					->where('status', '>', 1)
					->with('city')
					->with('state')
					->with('profile')
					->paginate(4);

				foreach ($h as $i) {
					$i->type_label = $i->size();
					$i->dim_label = $i->dim_label();
					$i->sales_ribbon = $i->sales_ribbon();
				}

			return $h;
		} else {
			if ( strlen($zip) == 2 ) {
				$sid = State::where("abbr", strtolower($zip))->first()->id;
				//latest on site
				$h = Home::orderBy('id', 'DESC')
						->where('status', '>', 1)
						->where('state_id', $sid)
						->with('city')
						->with('state')
						->with('profile')
						->paginate(4);

					foreach ($h as $i) {
						$i->type_label = $i->size();
						$i->dim_label = $i->dim_label();
						$i->sales_ribbon = $i->sales_ribbon();
					}

				return $h;
			} else {
				//by zipcode
				$h = Home::where('status', '>', 0)
						->where('zipcode', $zip)
						->with('city')
						->paginate(4);
			}
		}



	}


	public function getLatestCommunities($zip = null)
	{

		if ( $zip === null ) {
			//latest on site
			$p = Profile::orderBy('id', 'DESC')
					->where('plan_id', '>', 0)
					->with('city')
					->with('state')
					->with('photos')
					->paginate(4);

				foreach ($p as $z) {
					$z->photos = $z->photos();
				}

			return $p;
		} else {
			if ( strlen($zip) == 2 ) {
				//latest on site
				$p = Profile::orderBy('id', 'DESC')
						->where('plan_id', '>', 0)
						->where('state_id', $zip)
						->with('city')
						->with('state')
						->with('photos')
						->paginate(4);

					foreach ($p as $z) {
						$z->photos = $z->photos();
					}

				return $p;
			} else {
				//latest on site
				$p = Profile::orderBy('id', 'DESC')
						->where('plan_id', '>', 0)
						->where('zip_code', $zipcode)
						->with('city')
						->with('state')
						->with('photos')
						->paginate(4);

					foreach ($p as $z) {
						$z->photos = $z->photos();
					}

				return $p;
			}
		}



	}

}