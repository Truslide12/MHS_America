<?php

namespace App\Models;

class Space extends EloquentModel {
	
	protected $table = 'spaces';

	static $sizes = array('Single', 'Single', 'Double', 'Triple');
	static $statuses = array('Available', 'Taken');

	public function size()
	{
		return self::$sizes[$this->shape];
	}

	public function profile()
	{
		return $this->belongsTo(Profile::class);
	}

}