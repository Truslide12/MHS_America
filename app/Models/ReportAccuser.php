<?php

namespace App\Models;

class ReportAccuser extends EloquentModel {
	
	protected $table = 'report_accusers';

	protected $guarded = [];

	public function author()
	{
		return $this->belongsTo(User::class, 'user_id')->withTrashed();
	}
}

?>