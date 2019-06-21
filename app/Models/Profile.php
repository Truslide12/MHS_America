<?php
namespace App\Models;

use View;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends EloquentModel {
	
	use SoftDeletes;

	protected $table = 'profiles';

	protected $visible = array('id','title','tagline','type', 'address', 'addressb', 'zipcode', 'city', 'state', 'city_id', 'state_id');

	protected $guarded = [];

	protected $rep_types = array(
			'agent',
			'contractor',
			'community',
			'insurer',
			'transporter',
			'dealer',
			'manufacturer',
			'inspector',
			'other');

	protected static $profile_types = array(
			'agent',
			'contractor',
			'community',
			'insurer',
			'transporter',
			'dealer',
			'manufacturer',
			'inspector',
			'other');

	protected $_rep = null;

	protected static $com_properties = array(
			'pets' => "Pets allowed",
			'gated' => "Gated",
			'pool' => "Pool",
			'rec' => "Clubhouse",
			'fitness' => "Fitness center",
			'playground' => "Playground",
			'picnic' => "Picnic area",
			'basketball' => "Basketball",
			'tennis' => "Tennis",
			'golf' => "Golf",
			'shuffleboard' => "Shuffleboard",
			'fishing' => "Fishing",
			'storage' => "Storage"
		);

	protected static $daysofweek = array(
			'monday' => 1,
			'tuesday' => 2,
			'wednesday' => 3,
			'thursday' => 4,
			'friday' => 5,
			'saturday' => 6,
			'sunday' => 7
	);

	protected static $shortdays = array(
			0,
			'Mon',
			'Tue',
			'Wed',
			'Thu',
			'Fri',
			'Sat',
			'Sun'
	);

	protected static $longdays = array(
			0,
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday',
			'Sunday'
	);

	protected static $hour_texts = array(
		'12:00am', //0
		'1:00am',
		'2:00am',
		'3:00am',
		'4:00am',
		'5:00am',
		'6:00am',
		'7:00am',
		'8:00am',
		'9:00am',
		'10:00am',
		'11:00am',

		'12:00pm',
		'1:00pm',
		'2:00pm',
		'3:00pm',
		'4:00pm',
		'5:00pm',
		'6:00pm',
		'7:00pm',
		'8:00pm',
		'9:00pm',
		'10:00pm',
		'11:00pm', //23

		'12:30am', //24
		'1:30am',
		'2:30am',
		'3:30am',
		'4:30am',
		'5:30am',
		'6:30am',
		'7:30am',
		'8:30am',
		'9:30am',
		'10:30am',
		'11:30am',

		'12:30pm',
		'1:30pm',
		'2:30pm',
		'3:30pm',
		'4:30pm',
		'5:30pm',
		'6:30pm',
		'7:30pm',
		'8:30pm',
		'9:30pm',
		'10:30pm',
		'11:30pm', //47
		'' //48
	);

	/* Query scopes */

	public function scopeByType($query, $profile_type)
	{
		if(strtolower($profile_type) == 'professional') {
			return $query->where('type', '<>', 'Community');
		}elseif(in_array(strtolower($profile_type), $this->rep_types)){
			return $query->where('type', '=', $profile_type);
		}else{
			return $query;
		}
	}

	public function scopeByCompany($query, $company_id)
	{
		return $query->where('company_id', $company_id);
	}

	public function scopeLatest($query, $how_many)
	{
		return $query->orderBy('id', 'desc')->take($how_many)->get();
	}

	public function scopeByState($query, $state)
	{
		return $query->where('state_id', '=', $state);
	}

	public function scopeByCounty($query, $county)
	{
		return $query->where('county_id', '=', $county);
	}

	public function scopeByCity($query, $city)
	{
		return $query->where('city_id', '=', $city);
	}

	// public function scopeByUserAccess($query, $user)
	// {
	// 	return $query->join('profile_user')
	// }

	public function scopeSpotlight($query)
	{
		return $query->where('spotlight', '=', 1);
	}

	/* The Representative */

	public function findRep()
	{		
		if(!in_array(strtolower($this->type), $this->rep_types)) return new App\Models\Profiletypes\Community();
		$profiletype = '\\App\\Models\\Profiletypes\\'.$this->type;

		return new $profiletype();
	}

	public function rep()
	{
		if(!is_object($this->_rep) && in_array(strtolower($this->type), $this->rep_types)) {
			$this->_rep = $this->findRep();
		}
		return $this->_rep;
	}

	/* Typechecks */

	public function hasHomes() { return $this->rep()->hasHomes($this); }

	public function hasSpaces() { return $this->rep()->hasSpaces($this); }

	public function isResidence() { return $this->rep()->isResidence($this); }

	public function isIndividual() { return $this->rep()->isIndividual($this); }

	public function needsLicense() { return $this->rep()->needsLicense($this); }


	/* Relationships */

	public function kudos()
	{
		return $this->belongsToMany(User::class, 'profile_user_follows')->where('profile_user_follows.kudos', 1);
	}

	public function watchers()
	{
		return $this->belongsToMany(User::class, 'profile_user_follows')->where('profile_user_follows.watched', 1);
	}

	public function homes()
	{
		return $this->hasMany(Home::class, 'profile_id', 'id');
	}

	public function spaces()
	{
		return $this->hasMany(Space::class);
	}

	public function geoname()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id');
	}

	public function city()
	{
		return $this->belongsTo(Geoname::class, 'city_id', 'id');
	}

	public function county()
	{
		return $this->belongsTo(County::class, 'county_id', 'id');
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function company()
	{
		return $this->belongsTo(Company::class);
	}

	public function plan()
	{
		return $this->belongsTo(Plan::class);
	}

	public function photos()
	{
		return $this->hasMany(ProfilePhoto::class);
	}

	public function updates()
	{
		return $this->hasMany(ProfileUpdate::class);
	}

	public function subscription()
	{
		return $this->hasOne(Subscription::class, 'subscription_target');
	}

	public static function listProperties()
	{
		return self::$com_properties;
	}

	public static function listTypes()
	{
		return self::$profile_types;
	}

	public function hasAmenities()
	{
		if(!$this->plan->hasFeature('manage_amenities')) return false;

		$amenities = json_decode($this->amenities, true);
		return ( is_array($amenities) && array_key_exists('has', $amenities) && is_array($amenities['has']) && count($amenities['has']) > 0 );
	}

	public function hasAmenity($id)
	{
		$amenities = json_decode($this->amenities, true);
		return ( is_array($amenities) && array_key_exists('has', $amenities) && is_array($amenities['has']) && in_array($id, $amenities['has']) );
	}

	public function hasCarousel()
	{
		return $this->plan->hasFeature('manage_photos') && (count($this->photos->pluck('id')->all()) > 0);
	}

	public function hours()
	{
		return $this->hasMany(ProfileHour::class);
	}

	public function hourSets()
	{
		$stored_days = array();
		$hours = $this->hours;
		foreach($hours as $hourday) {
			$stored_days[$hourday->day] = $hourday;
		}

		$hoursets = array();
		$yesteropen = false;
		$lastseg = 0;
		$lastindex = 0;
		for($x = 1; $x < 8; $x++) {
			
			$current = $stored_days[$x];
			if(is_object($current)) {
				$open = !($current->start == 0 && $current->end == 0);
			}else{
				$open = true;
			}

			if($open <> $yesteropen || $x == 1) {
				if($x - $lastseg == 1) {
					$title = self::$longdays[$x];
					$hoursets[$lastindex] = array(
						'title' => $title,
						'start' => 'x',
						'end' => 'y'
					);
					$lastseg = $x;
				}else{
					$title = self::$shortdays[$lastseg] . '-' . self::$shortdays[$x];
					$hoursets[$lastindex] = array(
						'title' => $title,
						'start' => '',
						'end' => ''
					);
					$lastindex++;
				}
			}else{
				$lastseg++;
			}

			$yesteropen = $open;
		}
	}

	/* Data and Layout */

	public function fetchData()
	{
		//$profileTable = ($this->type == 'Community') ? 'Community' : 'Professional';
		//return $profileTable::find($this->link);
	}

	public function fetchTemplate()
	{
		$view = View::make($this->rep()->layout())
					->with('contentclass', 'texture-1')
					->with('profile', $this)
					->with('state', $this->state)
					->with('county', $this->county)
					->with('city', $this->geoname)
					->with('plan', $this->plan);

		if($this->rep()->hasHomes()) $view->with('homes', $this->homes);
		
		if($this->rep()->hasSpaces()) $view->with('spaces', $this->spaces()->get());

		if($this->company_id > 0 && is_object($this->company)) $view->with('company', $this->company);

		$business_hours = '1:8,18|5:9,14|7:x';
		$hour_sets = explode('|', $business_hours);

		$stored_days = [0];
		$cur_hours = '';
		for ($i=1; $i < 8; $i++) {
			for ($j=0; $j < count($hour_sets); $j++) { 
				list($day, $hours) = explode(':', $hour_sets[$j]);

				if ($day == $i) {
					$cur_hours = $hours;
				}
			}
			$stored_days[$i] = $cur_hours;
		}

		$final_hours = [];
		$yesteropen = false;
		$lastseg = 0;
		$lastindex = 0;
		$lasthours = '';
		for($x = 1; $x < 8; $x++) {
			
			$current = $stored_days[$x];
			$open = !($current == 'x');

			if ($open) {
				list($start, $end) = explode(',', $current);
			}else{
				$start = 48;
				$end = 48;
			}

			if($current != $lasthours || $open <> $yesteropen || $x == 1) {
				if($x - $lastseg == 1) {
					$title = self::$longdays[$x];
					$final_hours[$lastindex] = array(
						'title' => $title,
						'start' => self::$hour_texts[$start],
						'end' => self::$hour_texts[$end],
						'open' => $open
					);
				}else{
					$final_hours[$lastindex-1]['title'] = self::$shortdays[$lastseg] . '-' . self::$shortdays[$x-1];
					$title = self::$longdays[$x];
					$final_hours[$lastindex] = array(
						'title' => $title,
						'start' => self::$hour_texts[$start],
						'end' => self::$hour_texts[$end],
						'open' => $open
					);
				}
				$lastseg = $x;
				$lasthours = $current;
				$lastindex++;
			}

			/* if($current != $lasthours || $open <> $yesteropen || $x == 1) {
				$lastindex++;
			}else{
				$lastseg++;
			}*/

			$yesteropen = $open;
			
		}
		$view->with('business_hours', $final_hours);

		return $view;
	}

	protected $dates = ['deleted_at'];

	public function utility($name)
	{
		$td = json_decode($this->utilities, true);
		switch ($name) {
			case 'water':
				return $td[0];
				break;
			case 'sewer':
				return $td[1];
				break;
			case 'gas':
				return $td[2];
				break;
			default:
				return null;
				break;
		}
	}

}
