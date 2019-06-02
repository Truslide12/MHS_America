<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileNew extends EloquentModel {

	use SoftDeletes;

	protected $table = 'new_profiles';

	protected $allowed_types = [
		'community' => '\Community',
		'contractor' => '\Profiles\Contractor',
	];

}