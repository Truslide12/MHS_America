<?php

namespace App\Models;

use DB;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;
use App\Models\Amenities;

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

	private static $featruresList = Array(null,
			["id" => 1,  "name" => "dining",			"title" => "Dining Room"],
			["id" => 2,  "name" => "office",			"title" => "Office"],
			["id" => 3,  "name" => "swamp",				"title" => "Swamp Cooler"],
			["id" => 4,  "name" => "central",			"title" => "Centeral Air"],
			["id" => 5,  "name" => "island",			"title" => "Island"],
			["id" => 6,  "name" => "glamor_bath",		"title" => "Glamor Bath"],
			["id" => 7,  "name" => "jacuzzi",			"title" => "Jacuzzi"],
			["id" => 8,  "name" => "walk_in",			"title" => "Walk-in Closet"],
			["id" => 9,  "name" => "dormer",			"title" => "Dormer"],
			["id" => 10, "name" => "furnace",			"title" => "Furnace/Heating"],
			["id" => 11, "name" => "washhookup",		"title" => "Washer/Dryer Hookups"],
			["id" => 12, "name" => "porch",				"title" => "Porch"],
			["id" => 13, "name" => "patio",				"title" => "Patio"],
			["id" => 14, "name" => "shed",				"title" => "Shed"],
			["id" => 15, "name" => "carport",			"title" => "Carport"],
			["id" => 16, "name" => "garage",			"title" => "Garage"],
			["id" => 17, "name" => "fridge",			"title" => "Refridgerator"],
			["id" => 18, "name" => "stove",				"title" => "Range/Stove"],
			["id" => 19, "name" => "oven",				"title" => "Oven"],
			["id" => 20, "name" => "microwave",			"title" => "Microwave"],
			["id" => 21, "name" => "dishwasher",		"title" => "Dishwasher"],
			["id" => 22, "name" => "fireplace",			"title" => "Fireplace"],
			["id" => 23, "name" => "washer",			"title" => "Washer (Included)"],
			["id" => 24, "name" => "dryer",				"title" => "Dryer (Included)"],
			["id" => 25, "name" => "dryer_gas",			"title" => "Dryer (Gas)"],
			["id" => 26, "name" => "dryer_elec",		"title" => "Dryer (Electric)"],
			["id" => 27, "name" => "oven_gas",			"title" => "Range/Oven (Gas)"],
			["id" => 28, "name" => "oven_elec",			"title" => "Range/Oven (Electric)"],
			["id" => 29, "name" => "heating_gas",		"title" => "Heating (Gas)"],
			["id" => 30, "name" => "heating_elec",		"title" => "Heating (Electric)"],
			["id" => 31, "name" => "fireplace_gas",		"title" => "Fireplace (Gas)"],
			["id" => 32, "name" => "fireplace_wood",	"title" => "Fireplace (Wood)"],
			["id" => 33, "name" => "fans",				"title" => "Ceiling Fan(s)"],
			["id" => 34, "name" => "heating_pump",		"title" => "Heating (Heat Pump)"]
		);



	private static $materialsList = ["Unknown","Metal","Hardiboard","Wood","Block","Composite","Wood Shake","Tar","Carpet","Hardwood","Tile"];
	private static $windowsOpts = ["Unknown", "Single Pane", "Double Pane", "Fire Proof"];
	private static $setupOpts = ["Unknown", "High Set", "Low Set", "Ground Set"];
	private static $roofOpts = ["Unknown", "3x12", "4x12", "10x12", "Flat"];
	private static $thicknessOpts = ["Unknown", "4\"", "6\""];
	private static $strapOpts = ["Unknown", "Yes", "No"];


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
		/* why(how) belongsToMany? */
		return $this->belongsToMany(Profile::class);
	}

	public function profile()
	{
		return $this->belongsTo(Profile::class, 'profile_id', 'id');
	}

	public function company()
	{
		return $this->belongsTo(Company::class, 'company_id', 'id');
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

	public function default_photo($i=1)
	{
		$t = json_decode($this->photos, true);
		if ( property_exists ((object)$t, "1") ) {
			return (object)$t["1"];
		} else {
			return (object)["id"=>1,"tag"=>"no photo","url"=>"https://mhsamerica.com/img/nophoto.png"];
		}
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

	public function getFeatures()
	{
		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->features, $matches);
		return $matches[1];
	}

	public function CountFeatures()
	{
		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->features, $matches);
		return count($matches[1]);
	}

	public function getFeature($i=0)
	{

		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->features, $matches);


		foreach ( $matches[1] as $id ) {
			if ( $id == $i )
			return (object)self::$featruresList[$id];
		}

		return false;
	}

	public function getAppliances()
	{
		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->appliances, $matches);
		return $matches[1];
	}

	public function CountAppliances()
	{
		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->appliances, $matches);
		return count($matches[1]);
	}

	public function getAppliance($i=0)
	{

		//Supports 1-999..
		preg_match_all('/"([0-9]|[0-9][0-9]|[0-9][0-9][0-9])"/', $this->appliances, $matches);


		foreach ( $matches[1] as $id ) {
			if ( $id == $i )
			return (object)self::$featruresList[$id];
		}

		return false;
	}

	public function build_specs($spec)
	{

		$homespecs = json_decode($this->specs);

		$title = "Unknown";

		switch ( $spec ) {
			case "siding":
				$title = self::$materialsList[$homespecs->$spec];
			break;
			case "roof_mat":
				$title = self::$materialsList[$homespecs->$spec];
			break;
			case "windows":
				$title = self::$windowsOpts[$homespecs->$spec];
			break;
			case "kitchen_floor":
				$title = self::$materialsList[$homespecs->$spec];
			break;
			case "setup":
				$title = self::$setupOpts[$homespecs->$spec];
			break;
			case "skirting":
				$title = self::$materialsList[$homespecs->$spec];
			break;
			case "roof_angle":
				$title = self::$roofOpts[$homespecs->$spec];
			break;
			case "wall_thickness":
				$title = self::$thicknessOpts[$homespecs->$spec];
			break;
			case "floor":
				$title = self::$materialsList[$homespecs->$spec];
			break;
			case "strap":
				$title = self::$strapOpts[$homespecs->$spec];
			break;
		}

		return (object)["id" => $homespecs->$spec, "name" => str_replace(" ", "", strtolower($title)), "title" => $title];

	}

}