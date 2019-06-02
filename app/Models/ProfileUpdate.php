<?php

namespace App\Models;

class ProfileUpdate extends EloquentModel {
	
	protected $table = 'profile_updates';

	public static $descriptions = array(
		'new_spaces_single' => '% new space available',
		'new_spaces_plural' => '% new spaces available',
	);

	public function scopeByProfile($query, $profile)
	{
		return $query->where('profile_id', $profile)->order('updated_at', 'desc');
	}

	public function text()
	{
		if($this->count == 1) {
			$desc = $this->name . '_single';
		}else{
			$desc = $this->name . '_plural';
		}
		return str_replace('%', $this->count, self::$descriptions[$desc]);
	}


}