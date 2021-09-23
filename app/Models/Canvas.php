<?php

namespace App\Models;

class Canvas extends EloquentModel {
	
	protected $table = 'canvases';

	public function scopeForState($query, $state)
	{
		$canvas = $query->where('page', '=', 'state_'.$state)->first();
		return (is_object($canvas)) ? $canvas : Canvas::where('page', '=', 'frontend_welcome')->first();
	}

	public function scopeGetDefault($query)
	{
		//$default_canvas = Settings::get('canvas');
		//if(is_int($default_canvas) && ($canvas = Canvas::find($default_canvas))) {
		//	return $canvas->file;
		//}
		//return '';
		return Canvas::where('page', '=', 'frontend_welcome')->first();
	}

}