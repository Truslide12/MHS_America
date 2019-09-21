<?php

namespace App\Models;

class SMSettings extends EloquentModel {

	protected $table = 'sitemap_linkgroups';

	public function scopeName($query, $name)
	{
		return $query->where('name', $name)->first();
	}

}