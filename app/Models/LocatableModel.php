<?php

namespace App\Models;

use Phaza\LaravelPostgis\Eloquent\PostgisTrait;

class LocatableModel extends EloquentModel {
	use PostgisTrait;

	protected $postgisFields = [];

}