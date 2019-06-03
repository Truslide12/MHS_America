<?php

namespace App\Models;

class City extends Area {
	
	protected $table = 'cities';

	private $geoname = null;

	// public function counties()
	// {
	// 	return $this->belongsToMany('County');
	// }

	public function counties()
	{
		return $this->spatiallyRelatesToMany(County::class, 'ContainedBy');
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function scopeByState($query, $state)
	{
		return $query->where('state_id', '=', $state);
	}

	public function scopeByCounty($query, $county, $state)
	{
		return County::where('state_id', $state)->where('name', $county)->first()->cities();
	}

	public function scopeByZipCode($query, $zipcode)
	{
		return City::where('zipcode', $zipcode);
	}

	public function scopeByNameAndState($query, $title, $state)
	{
		return City::where('title', 'LIKE', $title)
					->where('state_id', $state);
	}

	public function scopeBySlugAndState($query, $slug, $state)
	{
		return City::where('name', $slug)
					->where('state_id', $state);
	}

	public function latitude() {
		//if(!is_object($this->geoname)) return 0;
		//return $this->geoname->latitude;
		return $this->latitude;
	}

	public function getlongitude() {
		//if(!is_object($this->geoname)) return 0;
		//return $this->geoname->latitude;
		return $this->longitude;
	}
	
}