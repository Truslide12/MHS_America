<?php

namespace App\Models;

class Banner extends Advertisement {

	public function scopeforState($query, $state)
	{
		return $query->where('state_id', '=', $state);
	}

	public function scopeforServiceArea($query, $state)
	{
		return $query->where('state_id', '=', $state);
	}

	public function scopeWithWeight($query)
	{
		return $query->addSelect(DB::raw('weight AS (1.5 + )'));
	}

}