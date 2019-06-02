<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileUser extends EloquentModel {
	
	use SoftDeletes;

	protected $table = 'profile_user';
	protected $fillable = ['user_id'];

	public function scopeFetch($query, $user, $profile)
	{
		$uid = (is_object($user)) ? $user->id : $user;
		$pid = (is_object($profile)) ? $profile->id : $profile;

		return $query->where('user_id', $uid)->where('profile_id', $pid)->firstOrFail();
	}

	public function role()
	{
		return $this->belongsTo('Role');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function profile()
	{
		return $this->belongsTo('Profile');
	}

}