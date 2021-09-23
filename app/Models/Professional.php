<?php

namespace App\Models;

use App\Models\Interfaces\ProfileInterface;

class Professional extends EloquentModel implements ProfileInterface {

	protected $table = "professionals";

	public function city()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id');
	}

	public function geoname()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id');
	}

	public function region()
	{
		return $this->belongsTo(Region::class, 'region_id', 'id');
	}

	public function county()
	{
		return $this->belongsTo(County::class);
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function plan()
	{
		return $this->belongsTo(Plan::class);
	}

}