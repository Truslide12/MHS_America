<?php

namespace App\Models;

use App\Models\Permission;

class CompanyUserPermission extends EloquentModel {
	
	protected $table = 'company_link_permission';

	public function permission()
	{
		return $this->belongsTo(Permission::class);
	}

}