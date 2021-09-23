<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingVoucher extends EloquentModel {

	use softDeletes;
	protected $table = 'listing_vouchers';

	public function scopeByCode($query, $code)
	{
		return $query->where('code', $code)->first();
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

}