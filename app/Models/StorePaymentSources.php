<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class StorePaymentSources extends EloquentModel {

	protected $table = 'store_payment_sources';
	use SoftDeletes;
	public function scopeByCompany($query, $id)
	{
		return $query->where('company_id', $id)->first();
	}


}
