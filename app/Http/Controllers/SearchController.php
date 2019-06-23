<?php namespace App\Http\Controllers;

use Cache;
use Carbon\Carbon;
use App\Models\Community;
use Config;
use App\Models\Canvas;
use App\Models\City;
use App\Models\Geoname;
use App\Models\Home;
use Input;
use App\Models\Profile;
use App\Models\Space;
use Session;
use App\Models\State;
use App\Models\Professional;
use Validator;
use GoogleMaps;

class SearchController extends Pony {
	
	public function getMapView()
	{
		$input = Input::get('input', '92399');

		$pagination_params = array(
			'search' => $input
		);

		$location = Geoname::findLocation($input);

		return view('search.newmap')
				->with('selector', $location)
				->with('mode', 0)
				->with('query', $input)
				->with('canvas', Canvas::getDefault());
	}

	public function postMapView()
	{
		$input = Input::get('input', '92399');
		//if ( !$input) { $input = '92399'; }
		$pagination_params = array(
			'search' => $input
		);

		$location = Geoname::findLocation($input);
		if ( empty($location) ) {
			$err = "Location Unknown";
			$location = Geoname::findLocation("92399");
		}

		return view('search.newmap')
				->with('selector', $location)
				->with('mode', Input::get("mode"))
				->with('query', $input)
				->with('canvas', Canvas::getDefault());
	}

	public function getCommunities()
	{
		$communities = Profile::byType('Community')->latest(5);

		return view('search.communities')
					->with('latest_communities', $communities)
					->with('canvas', Canvas::getDefault());
	}

	public function getHomes()
	{
		return view('search.homes')
					->with('canvas', Canvas::getDefault());
	}

	public function getSpaces()
	{
		return view('search.spaces')
					->with('canvas', Canvas::getDefault());
	}

	public function getProfessionals()
	{
		return view('search.professionals')
					->with('canvas', Canvas::getDefault());
	}

	public function getCommunitiesResults()
	{
		$input = Input::get('search');
		$name_search = false;

		$pagination_params = array(
			'search' => $input
		);

		$name = Input::get('name');

		$validator = Validator::make(['name' => $name],
			[
				'name' => 'required|regex:/([a-zA-Z0-9-_\s]+)/'
			]
		);

		if (!$validator->fails()) {
			$pagination_params = array_merge($pagination_params, ['name' => $name]);
			$name_search = true;
			$input = $name;
		}

		if($input == '') {
			return redirect()->route('communities');
		}

		$radius = Input::get('radius');


		if(!is_numeric($radius) || $radius < 10 || $radius > 100) {
			$radius = 25;
		}else{
			$pagination_params = array_merge($pagination_params, ['radius' => $radius]);
		}

		$error = false;

		/* Name search */
		if(array_key_exists('name', $pagination_params)) {
			//There's no geographic criteria
			$cities = [];
			$selector = false;
		/* Zip code search */
		}elseif(is_numeric($input) && strlen($input) == 5) {

			$selector = Geoname::with('state')->where('zipcode', $input)->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by zipcode
					$cities = Geoname::withinRadius($selector, $radius)->load('state');
					
					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}	
			}else{
				$cities = [];
				$error = true;
			}

		/* City, ST search */
		}elseif(strpos($input, ',') !== false) {
			
			list($city, $st) = explode(',', $input);
			
			$city = trim($city);
			$st = trim($st);
			$state = 0;

			//How are we naming this state? Abbreviation? Full name?
			if(strlen($st) == 2) {
				$stateobj = State::byAbbr(strtolower($st));

				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}elseif($st == ''){
				//Leave at 0
			}else{
				$stateobj = State::byTitle(ucwords(strtolower($st)));
				
				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}			

			//Valid info?
			if(!is_numeric($state) || strlen($city) < 3) return redirect()->route('communities');

			//Using a state or not?
			if($state == 0) {
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', '>', 0)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}else{
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', $state)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}elseif(!is_numeric($input)){

			$selector = Geoname::where('place_name', 'like', trim($input))->where('state_id', '>', \DB::raw(0))->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}

		if(!$error && count($cities) > 0) {
			
			//Get communities
			$query = Profile::byType('Community')->whereIn('city_id', $cities->pluck('id')->all());

			//Narrow results
			if(Input::get('spaces') == 1) {
				$query = $query->has('spaces');
				$pagination_params = array_merge($pagination_params, array('spaces' => 1));
			}

			if(Input::get('gated') == 1) {
				$query = $query->where('gated', true);
				$pagination_params = array_merge($pagination_params, array('gated' => 1));
			}

			if(Input::get('pets') == 1) {
				$query = $query->where('pets', true);
				$pagination_params = array_merge($pagination_params, array('pets' => 1));
			}

			if(Input::get('age') == 'family') {
				$query = $query->where('senior', false);
				$pagination_params = array_merge($pagination_params, array('age' => 'family'));	
			}elseif(Input::get('age') == 'senior') {
				$query = $query->where('senior', true);
				$pagination_params = array_merge($pagination_params, array('age' => 'senior'));	
			}

			$communities = $query->paginate(25);
		}

		if ($name_search) {
			$communities = Profile::byType('Community')->where('title', 'LIKE', '%'.$input.'%')->paginate(25);
		}

		if(!$name_search && ($error || !is_object($communities))) {
			return redirect()->route('communities-error')
						->with('error', 'Invalid location. Please check spelling.')
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
		}else{
			return view('search.results.communities')
						->with('name_search', $name_search)
						->with('cities', $cities)
						->with('communities', $communities)
						->with('centroid', $selector)
						->with('radius', $radius)
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
		}

	}

	public function getProfessionalsResults()
	{
		$input = Input::get('search');

		$pagination_params = array(
			'search' => $input
		);

		if($input == '') {
			return redirect()->route('professionals');
		}

		$radius = Input::get('radius');

		if(!is_numeric($radius) || $radius < 10 || $radius > 100) {
			$radius = 25;
		}else{
			$pagination_params = array_merge($pagination_params, (array)$radius);
		}

		$error = false;

		/* Zip code search */
		if(is_numeric($input) && strlen($input) == 5) {

			$selector = Geoname::with('state')->where('zipcode', $input)->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by zipcode
					$cities = Geoname::withinRadius($selector, $radius)->load('state');
					
					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}	
			}else{
				$cities = [];
				$error = true;
			}

		/* City, ST search */
		}elseif(strpos($input, ',') !== false) {
			
			list($city, $st) = explode(',', $input);
			
			$city = trim($city);
			$st = trim($st);
			$state = 0;

			//How are we naming this state? Abbreviation? Full name?
			if(strlen($st) == 2) {
				$stateobj = State::byAbbr(strtolower($st));

				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}elseif($st == ''){
				//Leave at 0
			}else{
				$stateobj = State::byTitle(ucwords(strtolower($st)));
				
				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}			

			//Valid info?
			if(!is_numeric($state) || strlen($city) < 3) return redirect()->route('professionals');

			//Using a state or not?
			if($state == 0) {
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', '>', 0)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}else{
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', $state)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}elseif(!is_numeric($input)){

			$selector = Geoname::where('place_name', 'like', trim($input))->where('state_id', '>', \DB::raw(0))->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}
		if(!$error && count($cities) > 0) {
			
			$type = Input::get('what', '');
			if(!in_array($type, Profile::listTypes()) || $type == 'community') $type = 'contractor';

			$type = studly_case($type);

			//Get professionals
			$query = Profile::byType($type)->whereIn('city_id', $cities->pluck('id')->all());

			$professionals = $query->paginate(25);
		}

		if($error || !isset($professionals) || !is_object($professionals)) {
			return redirect()->route('professionals')
						->withErrors(['error' => 'Invalid location. Please check spelling.'])
						->with('search', $input);
		}else{
			return view('search.results.professionals')
						->with('cities', $cities)
						->with('professionals', $professionals)
						//->with('pagination_params', $pagination_params)
						->with('centroid', $selector)
						->with('radius', $radius)
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
		}

	}

	public function getHomesResults()
	{
		$input = Input::get('search');

		$pagination_params = array(
			'search' => $input
		);

		if($input == '') {
			return redirect()->route('homes');
		}

		$radius = Input::get('radius');

		if(!is_numeric($radius) || $radius < 10 || $radius > 100) {
			$radius = 25;
		}else{
			$pagination_params = array_merge($pagination_params, (array)$radius);
		}

		$error = false;

		/* Zip code search */
		if(is_numeric($input) && strlen($input) == 5) {

			$selector = Geoname::with('state')->where('zipcode', $input)->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by zipcode
					$cities = Geoname::withinRadius($selector, $radius)->load('state');
					
					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}	
			}else{
				$cities = [];
				$error = true;
			}

		/* City, ST search */
		}elseif(strpos($input, ',') !== false) {
			
			list($city, $st) = explode(',', $input);
			
			$city = trim($city);
			$st = trim($st);
			$state = 0;

			//How are we naming this state? Abbreviation? Full name?
			if(strlen($st) == 2) {
				$stateobj = State::byAbbr(strtolower($st));

				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}elseif($st == ''){
				//Leave at 0
			}else{
				$stateobj = State::byTitle(ucwords(strtolower($st)));
				
				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}			

			//Valid info?
			if(!is_numeric($state) || strlen($city) < 3) return redirect()->route('communities');

			//Using a state or not?
			if($state == 0) {
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', '>', 0)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}else{
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', $state)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}elseif(!is_numeric($input)){

			$selector = Geoname::where('place_name', 'like', trim($input))->where('state_id', '>', \DB::raw(0))->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}

		//Make sure we have at least one city
		//if(!is_object($cities) || count($cities) < 1) return redirect()->route('communities');

		if(!$error && count($cities) > 0) {
			
			//Get communities
			$query = Home::whereIn('city_id', $cities->pluck('id')->all());

			//Narrow results
			if(Input::get('spaces') == 1) {
				$query = $query->has('spaces');
				$pagination_params = array_merge($pagination_params, array('spaces' => 1));
			}

			if(Input::get('gated') == 1) {
				$query = $query->where('gated', 1);
				$pagination_params = array_merge($pagination_params, array('gated' => 1));
			}

			if(Input::get('pets') == 1) {
				$query = $query->where('pets', 1);
				$pagination_params = array_merge($pagination_params, array('pets' => 1));
			}

			if(Input::get('age') == 'family') {
				$query = $query->where('senior', 0);
				$pagination_params = array_merge($pagination_params, array('age' => 'family'));	
			}elseif(Input::get('age') == 'senior') {
				$query = $query->where('senior', 1);
				$pagination_params = array_merge($pagination_params, array('age' => 'senior'));	
			}

			$homes = $query->paginate(25);

		}

		if($error || !is_object($homes)) {
			return view('search.results.homes')
						->with('error', 'Invalid location. Please check spelling.')
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
		}else{
			return view('search.results.homes')
						->with('cities', $cities)
						->with('homes', $homes)
						->with('centroid', $selector)
						->with('radius', $radius)
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
						//->with('pagination_params', $pagination_params)
		}

	}

	public function getSpacesResults()
	{
		$input = Input::get('search');

		$pagination_params = array(
			'search' => $input
		);

		if($input == '') {
			return redirect()->route('spaces');
		}

		$radius = Input::get('radius');

		if(!is_numeric($radius) || $radius < 10 || $radius > 100) {
			$radius = 25;
		}else{
			$pagination_params = array_merge($pagination_params, (array)$radius);
		}

		$error = false;

		/* Zip code search */
		if(is_numeric($input) && strlen($input) == 5) {

			$selector = Geoname::with('state')->where('zipcode', $input)->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by zipcode
					$cities = Geoname::withinRadius($selector, $radius)->load('state');
					
					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}	
			}else{
				$cities = [];
				$error = true;
			}

		/* City, ST search */
		}elseif(strpos($input, ',') !== false) {
			
			list($city, $st) = explode(',', $input);
			
			$city = trim($city);
			$st = trim($st);
			$state = 0;

			//How are we naming this state? Abbreviation? Full name?
			if(strlen($st) == 2) {
				$stateobj = State::byAbbr(strtolower($st));

				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}elseif($st == ''){
				//Leave at 0
			}else{
				$stateobj = State::byTitle(ucwords(strtolower($st)));
				
				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}			

			//Valid info?
			if(!is_numeric($state) || strlen($city) < 3) return redirect()->route('communities');

			//Using a state or not?
			if($state == 0) {
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', '>', 0)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}else{
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', $state)->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();
			}

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}elseif(!is_numeric($input)){

			$selector = Geoname::where('place_name', 'like', trim($input))->where('state_id', '>', \DB::raw(0))->where('enabled', 1)->orderBy('population', 'desc')->orderBy('place_name', 'asc')->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{

					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}

		}

		//Make sure we have at least one city
		//if(!is_object($cities) || count($cities) < 1) return redirect()->route('communities');

		if(!$error && count($cities) > 0) {
			
			//Get communities
			$query = Space::whereIn('city_id', $cities->pluck('id')->all());

			//Narrow results
			if(Input::get('gated') == 1) {
				$query = $query->where('gated', 1);
				$pagination_params = array_merge($pagination_params, array('gated' => 1));
			}

			if(Input::get('pets') == 1) {
				$query = $query->where('pets', 1);
				$pagination_params = array_merge($pagination_params, array('pets' => 1));
			}

			if(Input::get('age') == 'family') {
				$query = $query->where('senior', 0);
				$pagination_params = array_merge($pagination_params, array('age' => 'family'));	
			}elseif(Input::get('age') == 'senior') {
				$query = $query->where('senior', 1);
				$pagination_params = array_merge($pagination_params, array('age' => 'senior'));	
			}

			$spaces = $query->paginate(25);

		}

		if($error || !is_object($spaces)) {
			return view('search.results.spaces')
						->with('error', 'Invalid location. Please check spelling.')
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
		}else{
			return view('search.results.spaces')
						->with('cities', $cities)
						->with('spaces', $spaces)
						->with('centroid', $selector)
						->with('radius', $radius)
						->with('search', $input)
						->with('canvas', Canvas::getDefault());
						//->with('pagination_params', $pagination_params)
		}

	}

	public function postLocationQuery()
	{
		$input = Input::get('search');
		$type = Input::get('type');
		if(!in_array($type, ['communities', 'homes', 'spaces', 'professionals'])) $type = 'communities';

		$pagination_params = array(
			'search' => $input,
			'type' => $type
		);

		if($input == '') {
			return redirect()->route($types);
		}

		$radius = Input::get('radius');

		if(!is_numeric($radius) || $radius < 10 || $radius > 100) {
			$radius = 25;
		}else{
			$pagination_params = array_merge($pagination_params, (array)$radius);
		}

		$error = false;

		/* Zip code search */
		if(is_numeric($input) && strlen($input) == 5) {
			$selector = Geoname::where('zipcode', $input)->first();

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by zipcode
					$cities = Geoname::withinRadius($selector, $radius);
					
					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}	
			}else{
				$cities = [];
				$error = true;
			}
		/* City, ST search */
		}elseif(strpos($input, ',') !== false && preg_match('/^[a-zA-Z0-9-\\.,\\s]+,\\s?[a-zA-Z\\s]+$/i', $input)) {
			list($city, $st) = explode(',', $input);
			
			$city = trim($city);
			$st = trim($st);
			$state = 0;

			//How are we naming this state? Abbreviation? Full name?
			if(strlen($st) == 2) {
				$stateobj = State::byAbbr(strtolower($st));

				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}elseif($st == ''){
				//Leave at 0
			}else{
				$stateobj = State::byTitle(ucwords(strtolower($st)));
				
				if(is_a($stateobj, 'Eloquent')) $state = $stateobj->id;
			}			

			//Valid info?
			if(!is_numeric($state) || strlen($city) < 3) return redirect()->route($type);

			//Using a state or not?
			if($state == 0) {
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', '>', 0)->first();
			}else{
				$selector = Geoname::where('place_name', 'like', $city)->where('state_id', $state)->first();
			}

			if(is_object($selector)) {
				$cache_tag = 'geonames_city_'.$selector->id.'_radius_'.$radius;

				if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
					$cities = Cache::get($cache_tag);
				}else{
					//Pull the cities by City, State
					$cities = Geoname::withinRadius($selector, $radius)->load('state');

					//Cache it
					if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
						$expiresAt = Carbon::now()->addMinutes(30);
						Cache::put($cache_tag, $cities, $expiresAt);
					}
				}
			}else{
				$cities = [];
				$error = true;
			}
		}elseif(!is_numeric($input)){
			$response = \GoogleMaps::load('geocoding')
									->setParam(['address' => $input])
									->get();

			

		}
	}

}