<?php

namespace App\Models;

class Subscription extends EloquentModel {

	protected $table = 'store_subscriptions';

	public function scopeByCompany($query, $id)
	{
		return $query->where('id', $id)->first();
	}

	public function profile()
	{
		return $this->belongsTo('Profile', 'subscription_target', 'id');
	}

	public function plan()
	{
		return $this->belongsTo('StoreProducts', 'stripe_plan_id', 'stripe_product_name');
	}

}
