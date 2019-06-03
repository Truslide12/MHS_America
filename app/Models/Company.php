<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends EloquentModel {

	use SoftDeletes;
	
	protected $table = 'companies';

	public function getRole()
	{
		return Role::find($this->pivot->role_id);
	}

	public function profiles()
	{
		return $this->hasMany(Profile::class);
	}

	public function communities()
	{
		return $this->profiles()->where('type', 'Community');
	}

	public function city()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'osm_id');
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function newsitems()	
	{
		return $this->hasMany(CompanyNewsItem::class);
	}

	public function invites()	
	{
		return $this->hasMany(CompanyInvite::class);
	}

	public function companyUsers()
	{
		return $this->belongsToMany(User::class)->withPivot('role_id');
	}

	public function kudos()
	{
		return $this->belongsToMany(User::class, 'company_user_follows')->where('company_user_follows.kudos', 1);
	}

	public function watchers()
	{
		return $this->belongsToMany(User::class, 'company_user_follows')->where('company_user_follows.watched', 1);
	}

	public function paysources()
	{
		return $this->hasMany(StorePaymentSources::class, 'company_id')->orderBy('is_default', 'desc');
	}
	public function subscriptions()
	{
		return $this->hasMany(Subscription::class, 'company_id');
	}
	public function homes()
	{
		return $this->hasMany(Home::class);
	}
}