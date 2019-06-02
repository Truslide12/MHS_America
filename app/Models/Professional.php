<?php

namespace App\Models;

use App\Models\Interfaces\ProfileInterface;

class Professional extends EloquentModel implements ProfileInterface {

	protected $table = "professionals";

	public function city()
	{
		return $this->belongsTo('Geoname', 'city_id', 'osm_id');
	}

	public function geoname()
	{
		return $this->belongsTo('Geoname', 'city_id', 'osm_id');
	}

	public function region()
	{
		return $this->belongsTo('Region', 'region_id', 'id');
	}

	public function county()
	{
		return $this->belongsTo('County');
	}

	public function state()
	{
		return $this->belongsTo('State');
	}

	public function plan()
	{
		return $this->belongsTo('Plan');
	}

}