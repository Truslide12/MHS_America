<?php

namespace App\Models;

use DB;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

/*
switch roof angle/material order
add fire window option
dormer in home features
washer/dryer and hookups gas/elec
add space to profile 3editor
*/

class Home extends LocatableModel {

	protected $tables = 'homes';
	
	protected $postgisFields = [
        'location' => Point::class,
    ];

	private static $shapes = array(
		'Single',
		'Single',
		'Double',
		'Triple',
		'Quadruple',
		'Daaaaamn'
	);

	public function size()
	{
		return self::$shapes[$this->shape];
	}

	public function profiles()
	{
		return $this->belongsToMany(Profile::class);
	}

	public function sn($i=0)
	{
		$t = json_decode($this->serial);
		return $t[$i];
	}

	public function slideshow()
	{
		$t = json_decode($this->photos);
		return $t;
	}

	public function city()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id');
	}
	
	public function state()
	{
		return $this->belongsTo(State::class);
	}
	
	public function watchers()
	{
		return $this->belongsToMany(User::class, 'home_user_follows')->where('home_user_follows.watched', 1);
	}

	public function scopeLatest($query, $how_many)
	{
		return $query->orderBy('id', 'desc')->take($how_many)->get();
	}

	public function scopeWithinRegion($query, $region)
	{
		return $query->join('regions', function($query) use ($region) {
			$query->on('regions.id', '=', DB::raw($region))
			->on(DB::raw('ST_ContainsProperly(ST_SetSRID(geometry, 4269), ST_SetSRID(location, 4269))'), '=', DB::raw('true'));
		});
	}

	public function subscription()
	{
		return $this->hasOne(Subscription::class, 'subscription_target');
	}


}