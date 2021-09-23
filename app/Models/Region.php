<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class Region extends Area {
	
	protected $table = 'regionshapes';

	public function counties()
	{
		return $this->hasMany(County::class);
	}

	// public function getCities()
	// {
	// 	if(cache_enabled() && Cache::has($this->getCacheKey('cities'))) {
	// 		return Cache::get($this->getCacheKey('cities'));
	// 	}

	// 	$counties = $this->counties;
	// 	$cities = new Collection;
	// 	foreach($counties as $county) {
	// 		$cities = $cities->merge($county->cities);
	// 	}

	// 	$cities = $cities->sortBy(function($city){ return $city->title; });

	// 	if(cache_enabled()) {
	// 		$expiresAt = Carbon::now()->addMinutes(30);
	// 		Cache::put($this->getCacheKey('cities'), $cities, $expiresAt);
	// 	}

		//return $cities;
		//return $this->belongsToMany('County');
	//}

	public function cities()
	{
		return $this->spatiallyRelatesToMany(Geoname::class, 'Contains', 'geometry', 'geometry');
	}

	public function getCityIndex()
	{
		if(cache_enabled() && Cache::has($this->getCacheKey('city_index'))) {
			return Cache::get($this->getCacheKey('city_index'));
		}

		$cities = CityCountyLink::distinct()->whereIn('county_id', $this->counties()->pluck('id')->all())->pluck('city_id')->all();

		if(cache_enabled()) {
			$expiresAt = Carbon::now()->addMinutes(30)*60;
			Cache::put($this->getCacheKey('city_index'), $cities, $expiresAt);
		}

		return $cities;
		//return $this->belongsToMany('County');
	}

	public function getCacheKey($item)
	{
		return 'region_'.$this->id.'_'.$item;
	}

}