<?php

namespace App\Models;

class CompanyInvite extends EloquentModel {
	
	protected $table = 'company_invites';

	public function scopeByCode($query, $code)
	{
		return $query->where('code', $code);
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}
}