<?php

namespace App\Models;

class StoreProducts extends EloquentModel {

	protected $table = 'store_products';

	public function scopeByStripeProductName($query, $name)
	{
		return $query->where('stripe_product_name', $name)->first();
	}


}
