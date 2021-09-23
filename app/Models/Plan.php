<?php

namespace App\Models;

class Plan extends EloquentModel {
	
	protected $table = 'plans';

	public function features()
	{
		return $this->belongsToMany(Feature::class);
	}

	public function hasFeature($feature)
	{
		$result = $this->features()->where('name', $feature)->first();
		return (is_object($result));
	}

}