<?php namespace App\Http\Controllers;

use App\Models\Advertisement;
use App;
use App\Models\Canvas;
use Config;
//use City;
use App\Models\Geoname;
use App\Models\County;
use App\Models\CityCountyLink;
use App\Models\Home;
use Input;
use App\Models\Profile;
use App\Models\Region;
use App\Models\State;
use App\Models\Space;

class ExploreController extends Pony {

	public function getIndex()
	{
		return view('explore')
					->with('latest_communities', Profile::byType('Community')->latest(5))
					->with('latest_homes', Home::latest(5))
					->with('hide_community_images', true)
					->with('hide_home_images', true);
					//->with('states', State::az()->get())
					//->with('canvas', Canvas::getDefault());
	}

	public function getState($state)
	{
		if($state == 'dc') return redirect()->route('state', array('state' => 'md'));

		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj) || !is_a($stateobj, 'Eloquent')) return App::abort(404);

		return view('state')
					->with('state', $stateobj)
					->with('spotlight', $stateobj->hasSpotlight())
					->with('region_count', $stateobj->regions()->count())
					->with('advertisements', Advertisement::pullStateBlocks($stateobj->id, 4));
					//->with('canvas', Canvas::forState($stateobj->name));
	}

	public function getStateSpotlight($state)
	{
		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj)) return App::abort(404);

		$spotlight = $stateobj->hasSpotlight();
		if(!$spotlight) return redirect()->route('state', array('state' => $stateobj->abbr));

		return view('state-spotlight')
					->with('state', $stateobj)
					->with('advertisements', Advertisement::pullStateBlocks($stateobj->id, 4))
					->with('canvas', Canvas::forState($stateobj->name));
	}

	public function getStateEverything($state)
	{
		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj)) return App::abort(404);

		return view('state-everything')
					->with('state', $stateobj)
					->with('spotlight', $stateobj->hasSpotlight())
					->with('region_count', $stateobj->regions()->count())
					->with('communities', Profile::byState($stateobj->abbr));
					//->with('canvas', Canvas::forState($stateobj->name));
	}

	public function getStateCityQuery($state)
	{
		$stateobj = State::byAbbr(strtolower($state));
		if(!is_object($stateobj)) return App::abort(404);

		$cityquery = Input::get('city');

		$city = Geoname::byCityState($cityquery, $stateobj->id);

		if(!is_object($city)) return redirect()->route('state', array('state' => $stateobj->abbr));

		$county = $city->counties()->first();
		if(!is_object($county)) return redirect()->route('state', array('state' => $stateobj->abbr));

		return redirect()->route('city', array('state' => $stateobj->abbr, 'county' => $county->name, 'city' => $city->name));
	}

	public function getCounty($state, $county)
	{
		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj)) return App::abort(404);

		$countyobj = County::byState($stateobj->id)->where('name', '=', $county)->first();
		if(!is_object($countyobj)) return App::abort(404);

		if($countyobj->isCityCounty()) {
			$cityobj = City::find($countyobj->cityident);
			if(!is_object($countyobj)) {
				return App::abort(404);
			}else{
				return redirect()->route('city', array('state' => $stateobj->abbr, 'county' => $countyobj->name, $cityobj->name));
			}
		}

		$mode = 'c';
		$modes = array(
			'c' => 'Communities',
			'h' => 'Homes',
			's' => 'Spaces',
			'p' => 'Professionals'
		);
		if(Input::has('mode') && in_array(Input::get('mode'), array_keys($modes))) {
			$mode = Input::get('mode');
		}

		//$communities = Profile::byCity($cityobj->id)->byType('community')->paginate(25);
		$cache_tag = 'results_county_'.$countyobj->id.'_'.strtolower($modes[$mode]);

		if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
			$results = Cache::get($cache_tag);
		}else{
			switch($mode) {
				case 'h':
					$results = Home::whereIn('city_id', $countyobj->cities()->pluck('places.osm_id'))
					->whereIn('status', [1, 3])
					->paginate(25);
					break;
				case 's':
					$results = Space::whereIn('city_id', $countyobj->cities()->pluck('places.osm_id'))->paginate(25);
					break;
				case 'p':
					$results = Profile::byType('Professional')->whereIn('city_id', $countyobj->cities()->pluck('places.osm_id'))->paginate(25);
					break;
				case 'c':
				default:
					$results = Profile::byType('Community')->whereIn('city_id', $countyobj->cities()->pluck('places.osm_id'))
															->paginate(25);
					break;
			}

			//Cache it
			if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
				$expiresAt = Carbon::now()->addMinutes(30);
				Cache::put($cache_tag, $results, $expiresAt);
			}
		}

		return view('county')
					->with('modes', $modes)
					->with('mode', $mode)
					->with('state', $stateobj)
					->with('results', $results)
					->with('county', $countyobj)
					->with('derp', $countyobj->cities()->pluck('places.id'));
					//->with('canvas', Canvas::forState($stateobj->name));
	}

	public function getCity($state, $county, $city)
	{
		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj)) return App::abort(404);

		$countyobj = County::byState($stateobj->id)->where('name', '=', $county)->first();
		if(!is_object($countyobj)) return App::abort(404);
		
		$cityobj = $countyobj->cities()->where('name', '=', $city)->first();
		if(!is_object($cityobj)) return App::abort(404);

		if(Input::has('region')) {
			$regionobj = Region::where('name', '=', Input::get('region'))->first();
			if(!is_object($regionobj) || $countyobj->region_id != $regionobj->id) $regionobj = false;
		}else{
			$regionobj = false;
		}

		$mode = 'c';
		$modes = array(
			'c' => 'Communities',
			'h' => 'Homes',
			's' => 'Spaces',
			'p' => 'Professionals'
		);
		if(Input::has('mode') && in_array(Input::get('mode'), array_keys($modes))) {
			$mode = Input::get('mode');
		}

		//$communities = Profile::byCity($cityobj->id)->byType('community')->paginate(25);
		$cache_tag = 'geonames_city_'.$cityobj->id.'_radius_25';

		if(Config::get('cache.enabled', false) && Cache::has($cache_tag)) {
			$cities = Cache::get($cache_tag);
		}else{
			//Pull the cities by zipcode
			//$cities = Geoname::selectDistance($cityobj, 'id', '*')->withinRadius($cityobj, 25)->orderBy('distance', 'asc')->get();
			$cities = Geoname::withinRadius($cityobj, 25);

			//Cache it
			if(Config::get('cache.enabled', false) && is_array($cities) && count($cities) > 0) {
				$expiresAt = Carbon::now()->addMinutes(30);
				Cache::put($cache_tag, $cities, $expiresAt);
			}
		}

		//die('<pre>'.print_r($cities->all()).'</pre>');

		switch($mode) {
			case 'h':
				$results = Home::whereIn('city_id', $cities->pluck('osm_id')->all())->paginate(25);
				break;
			case 's':
				$results = Space::whereIn('city_id', $cities->pluck('osm_id')->all())->paginate(25);
				break;
			case 'p':
				$results = Profile::byType('Professional')->whereIn('city_id', $cities->pluck('osm_id')->all())->paginate(25);
				break;
			case 'c':
			default:
				$results = Profile::byType('Community')->whereIn('city_id', $cities->pluck('osm_id')->all())->paginate(25);
				break;
		}

		// if($countyobj->region_id != 0) {
		// 	$region = $countyobj->region;
		// 	$professionals = Profile::byType('professional')
		// 							->whereIn('city_id', CityCountyLink::groupBy('city_id')->whereIn('county_id', $region->counties()->pluck('id', 'id')->all())->pluck('city_id', 'city_id')->all())
		// 							->paginate(25);
		// }elseif(is_object($regionobj)){
		// 	$professionals = Profile::byType('professional')
		// 							->whereIn('city_id', CityCountyLink::groupBy('city_id')->whereIn('county_id', $regionobj->counties()->pluck('id', 'id')->all())->pluck('city_id', 'city_id')->all())
		// 							->paginate(25);
		// }else{
		// 	$professionals = Profile::byCounty($countyobj->id)->byType('professional')->paginate(25);
		// }

		return view('city')
					->with('state', $stateobj)
					->with('county', $countyobj)
					->with('city', $cityobj)
					->with('results', $results)
					->with('region', $regionobj)
					->with('modes', $modes)
					->with('mode', $mode);
					//->with('canvas', Canvas::forState($stateobj->name));
	}
	
	public function getRegion($state, $region)
	{
		$stateobj = State::byAbbr($state);
		if(!is_object($stateobj)) return App::abort(404);

		$regionobj = Region::where('state_id', $stateobj->id)->where('name', $region)->first();
		if(!is_object($stateobj)) return App::abort(404);

		//Geoname::select('geonames.id', 'geonames.place_name', 'geonames.name')->withinRegion($regionobj->id)

		return view('region')
					->with('state', $stateobj)
					->with('region', $regionobj)
					->with('cities', $regionobj->cities())
					->with('homes', Home::withinRegion($regionobj->id));
					//->with('canvas', Canvas::forState($stateobj->name));
	}

}