<?php

namespace App\Models;

class State extends Area {
	
	protected $table = 'states';
	
	protected $postgisFields = [];

	public function counties()
	{
		return $this->hasMany('County');
	}

	public function cities()
	{
		return $this->hasMany('City');
	}

	public function places()
	{
		return $this->hasMany('Geoname')->where('enabled', 1);
	}

	public function regions()
	{
		return $this->hasMany('Region');
	}

	public function scopeByAbbr($query, $abbr)
	{
		return $query->where('abbr', $abbr)->first();
	}

	public function scopeByTitle($query, $title)
	{
		return $query->where('title', 'like', $title)->first();
	}

	public function canvas()
	{
		$canvas = Canvas::forState($this->name);
		if(!is_object($canvas)) {
			return false;
		}
		
		return $canvas->file;
	}

	public function hasSpotlight()
	{
		$ads_exist = Advertisement::anyForState($this->id);
		$spotlight_profiles = (Profile::byState($this->id)->spotlight()->count() > 0);

		return ($ads_exist || $spotlight_profiles);
	}

}