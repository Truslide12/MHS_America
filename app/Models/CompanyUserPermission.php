<?php

namespace App\Models;

class CompanyUserPermission extends EloquentModel {
	
	protected $table = 'company_link_permission';

	public function permission()
	{
		return $this->belongsTo('Permission');
	}

}