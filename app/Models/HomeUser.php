<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class HomeUser extends EloquentModel {
	
	use SoftDeletes;

	protected $table = 'home_user';
	protected $fillable = ['user_id'];

	public function scopeFetch($query, $user, $home)
	{
		$uid = (is_object($user)) ? $user->id : $user;
		$hid = (is_object($home)) ? $home->id : $home;

		return $query->where('user_id', $uid)->where('home_id', $hid)->firstOrFail();
	}

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function home()
	{
		return $this->belongsTo(Home::class);
	}

}