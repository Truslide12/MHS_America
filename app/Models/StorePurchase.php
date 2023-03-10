<?php

namespace App\Models;

class StorePurchase extends EloquentModel {

	protected $table = 'store_purchases';

	public function scopeByTransaction($query, $id)
	{
		return $query->where('transaction_id', $id)->first();
	}

	public function product()
	{
		return $this->hasOne(StoreProducts::class, 'id', 'product_id');
	}

	public function target()
	{
		return $this->hasOne(Profile::class, 'id', 'product_target');
	}
}
