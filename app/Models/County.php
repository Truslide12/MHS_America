<?php

namespace App\Models;

use Phaza\LaravelPostgis\Geometries\MultiPolygon;

class County extends Area {

	protected $table = 'countyshapes';

	protected $postgisFields = [
        'geometry' => MultiPolygon::class,
    ];
	
	public function cities()
	{
		return $this->belongsToMany(Geoname::class, 'city_county', 'county_id', 'city_id');
		//return $this->spatiallyRelatesToMany('Geoname', 'Contains');
		//return $this->hasMany('Geoname', 'county_id', 'admin_fips');
		//return City::where('county', '=', $this->id)
		//			->orWhere('countyb', '=', $this->id)
		//			->orWhere('countyc', '=', $this->id)
		//			->orWhere('countyd', '=', $this->id)
		//			->orWhere('countye', '=', $this->id);
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function scopeByState($query, $state_id)
	{
		return $query->where('state_id', '=', $state_id);
	}

	public function scopeByStateAbbr($query, $state_id)
	{
		return $query->where('state', '=', strtoupper($state_id));
	}

	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	public function isCityCounty()
	{
		return ($this->cityident > 0);
	}

}