<?php

namespace App\Models;

class LedgerItem extends EloquentModel {
	
	protected $table = 'ledger_items';

	public function source()
	{
		return ($this->is_payment) ? 
			$this->belongsTo('CompanyPayment', 'source_id', 'id') : 
			$this->belongsTo('CompanyInvoice', 'source_id', 'id');
	}

	public function amountUpToDate()
	{
		return ( $this->amount === (($this->is_payment) ? -($this->source->amount) : $this->source->amount) );
	}

}