<?php

namespace App\Models;

class CompanyNewsItem extends EloquentModel {
	
	protected $table = "company_news_items";

	public function company()
	{
		return $this->belongsTo('Company');
	}

}