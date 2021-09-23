<?php

namespace App\Models;

class Amenities extends EloquentModel {
	public $timestamps = false;
	protected $fillable = ["name", "title", "disabled", "visible", "order"];
	public function scopeByTitle($query, $title)
	{
		return $query->where('title', 'like', $title)->first();
	}

}