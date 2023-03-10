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
			["id" => 4,  "name" => "central",			"title" => "Central Air"],
			["id" => 5,  "name" => "island",			"title" => "Island"],
			["id" => 6,  "name" => "glamor_bath",		"title" => "Glamour Bath"],
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
			["id" => 17, "name" => "fridge",			"title" => "Refrigerator"],
			["id" => 18, "name" => "stove",				"title" => "Range/Stove"],
			["id" => 19, "name" => "oven",				"title" => "Oven"],
			["id" => 20, "name" => "microwave",			"title" => "Microwave"],
			["id" => 21, "name" => "dishwasher",		"title" => "Dishwasher"],
			["id" => 22, "name" => "fireplace",			"title" => "Fireplace"],
			["id" => 23, "name" => "washer",			"title" => "Washer (Included)"],
			["id" => 24, "name" => "dryer",				"title" => "Dryer (Included)"],
			["id" => 25, "name" => "dryer_gas",			"title" => "Dryer Hookup (Gas)"],
			["id" => 26, "name" => "dryer_elec",		"title" => "Dryer Hookup (Electric)"],
			["id" => 27, "name" => "oven_gas",			"title" => "Range/Oven (Gas)"],
			["id" => 28, "name" => "oven_elec",			"title" => "Range/Oven (Electric)"],
			["id" => 29, "name" => "heating_gas",		"title" => "Heating (Gas)"],
			["id" => 30, "name" => "heating_elec",		"title" => "Heating (Electric)"],
			["id" => 31, "name" => "fireplace_gas",		"title" => "Fireplace (Gas)"],
			["id" => 32, "name" => "fireplace_wood",	"title" => "Fireplace (Wood)"],
			["id" => 33, "name" => "fans",				"title" => "Ceiling Fan(s)"],
			["id" => 34, "name" => "heating_pump",		"title" => "Heating (Heat Pump)"],
			["id" => 35, "name" => "range_hood",		"title" => "Range Hood"],
			["id" => 36, "name" => "cook_top",			"title" => "Cook Top"],
			["id" => 37, "name" => "steps",				"title" => "Steps"]
		);



	private static $materialsList = [
		0  => "Unknown",
		1  => "Metal",
		2  => "Hardie Board",
		3  => "Wood",
		4  => "Block",
		5  => "Composite",
		6  => "Wood Shake",
		7  => "Tar",
		8  => "Carpet",
		9  => "Hardwood",
		10 => "Tile",
		11 => "Vinyl"
	];

	private static $windowsOpts = [
		0 => "Unknown", 
		1 => "Single Pane", 
		2 => "Double Pane", 
		3 => "Fire Proof"
	];

	private static $setupOpts = [
		0 => "Unknown",
		1 => "High Set",
		2 => "Low Set",
		3 => "Ground Set"
	];

	private static $roofOpts = [
		0 => "Unknown", 
		1 => "3x12", 
		2 => "4x12", 
		3 => "10x12", 
		4 => "Flat"
	];

	private static $thicknessOpts = [
		0 => "Unknown", 
		1 => "4\"", 
		2 => "6\""
	];

	private static $strapOpts = [
		0 => "Unknown", 
		1 => "Yes", 
		2 => "No"
	];


	private static $shapes = array(
		'Single',
		'Single',
		'Double',
		'Triple',
		'Quadruple',
		'' // Daaaaaamn
	);

	public function size()
	{
		if ( $this->shape ) {
			return self::$shapes[$this->shape];
		} else {
			return self::$shapes[0];
		}
	}

	public function dim_label()
	{
		if ( $this->width > 0 && $this->length > 0 && $this->offsets == 0) {
			return $this->width."x".$this->length;
		} else {
			return $this->square_footage."sqft.";
		}
	}

	public function sales_ribbon()
	{

		switch( $this->status ) {
			case 3:
				return (object)["color" => "#f52707", "text" => ' &nbsp; &nbsp; SOLD'];
			break;
			case 5:
				return (object)["color" => "#f5b32f", "text" => 'PENDING'];
			break;
			default:
				$d = json_decode($this->seller_info);
				switch( $d->promo->type) {
					case 1:
						return (object)["color" => " #32a852;font-size:0.75em;font-weight:bold", "text" => 'OPEN HOUSE'];
					break;
					case 2:
						return (object)["color" => " #d42906;font-size:0.9em;font-weight:bold", "text" => 'PRICE DROP'];
					break;
					case 3:
						return (object)["color" => " #0647d4", "text" => 'UPDATED'];
					break;
					default:
						if ( $this->type == 1 ) {
							return (object)["color" => "#03bafc", "text" => 'FOR RENT'];
						} else {
							return (object)["color" => " #03bafc", "text" => 'FOR SALE'];
						}
					break;
				}

			break;
		}
	}

	public function getTitle()
	{
		return (is_null($this->title) || $this->title == '') ? $this->beds.'bed '.$this->baths.'bath '.$this->size().'-wide' : $this->title;
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
		return $this->belongsTo(Company::class, 'company_id', 'id')->withDefault([
			'is_personal' => 'false',
			'title' => 'Unknown',
			'phone' => 'Unknown',
			'street_addr' => 'Unknown'
		]);
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
		if ( is_array($t) || is_object($t) ) {
			if ( count($t) > 0 ) {
				return (object)$t["1"];
			} else {
				return (object)["id"=>1,"tag"=>"no photo","url"=>"https://mhsamerica.com/img/nophoto.png"];
			}
		} else {
				return (object)["id"=>1,"tag"=>"no photo","url"=>"https://mhsamerica.com/img/nophoto.png"];
		}
	}

	public function city()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id')->withDefault([
        	'place_name' => 'Unknown',
    	]);
	}
	
	public function state()
	{
		return $this->belongsTo(State::class)->withDefault([
        	'abbr' => 'Unknown',
    	]);
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

	public function receipt()
	{
		return $this->hasOne(StorePurchase::class, 'product_target');
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

		if (json_last_error() === JSON_ERROR_NONE) {

			if ( ! array_key_exists($spec, $homespecs) ) {
				$homespecs->$spec = 0;
			} else {

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


			}

		} else {
			$homespecs = (object)[];
			$homespecs->$spec = 0;
		}

		return (object)["id" => $homespecs->$spec, "name" => str_replace(" ", "", strtolower($title)), "title" => $title];

	}

}