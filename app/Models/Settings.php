<?php

namespace App\Models;

class Settings extends EloquentModel {
	
	protected $table = 'settings';

	protected $guarded = array('id');

	public static function get($item, $default = '')
	{
		$conf = Config::get($item, $default);

		$setting = Settings::byName($item)->first();
		return ($setting && $setting->value != '') ? $setting->value : $conf;
	}

	public function scopeByName($query, $name)
	{
		return $query->where('name', $name);
	}

}