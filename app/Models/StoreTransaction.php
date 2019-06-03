<?php

namespace App\Models;

class StoreTransaction extends EloquentModel {

	protected $table = 'store_transactions';


	public function scopeByCompany($query, $id)
	{
		return $query->where('company_id', $id)->first();
	}

	public function items()
	{
		return $this->hasMany(StorePurchase::class, 'transaction_id', 'id');
	}

	public function getTransactionCodeAttribute($transaction_code)
	{
    	return $this->attributes['transaction_code'] = strtoupper($transaction_code);
	}


	public function getTransactionTotalUSD()
	{
    	return sprintf('$%s', number_format(($this->transaction_total/100), 2));
	}

	public function getSimpleStartTime()
	{
    	return date('m-d-Y', strtotime($this->created_at));
	}

	public function getBillingMonth()
	{
    	return date('M', strtotime($this->created_at));
	}


}
