<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyUser extends EloquentModel {
	
	//theyre not in the db
	//use SoftDeletes;
	public $timestamps = false;

	protected $table = 'company_user';

	public function scopeFetch($query, $user, $company)
	{
		$uid = (is_object($user)) ? $user->id : $user;
		$cid = (is_object($company)) ? $company->id : $company;

		return $query->withTrashed()->where('user_id', $uid)->where('company_id', $cid);
	}

	public function role()
	{
		return $this->belongsTo('Role');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function company()
	{
		return $this->belongsTo('Company');
	}

	public function profiles()
	{
		return $this->user->profiles()->wherePivot('company_id', $this->company_id);
	}

	public function permissions()
	{
		return $this->hasMany('CompanyUserPermission');
	}	

}