<?php

namespace App\Models;

use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

class Area extends EloquentModel {
	use PostgisTrait;

	protected $postgisFields = [];

	public function scopeBySlug($query, $slug)
	{
		return $query->where('name', $slug);
	}

	public function scopeAz($query, $field = 'title')
	{
		return $query->orderBy($field, 'asc');
	}

}