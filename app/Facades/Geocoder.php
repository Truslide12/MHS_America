<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Models\Support\Geocoder as GeocoderClass;

class Geocoder extends Facade {
	
	protected static function getFacadeAccessor() {
		return GeocoderClass::class;
	}

}