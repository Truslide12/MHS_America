<?php

namespace App\Models;

class Page extends EloquentModel {
	
	protected $table = 'pages';

	public function scopeBySlug($query, $slug)
	{
		return $query->where('slug', $slug);
	}

}