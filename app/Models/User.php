<?php

namespace App\Models;

class User extends \App\User {
	
}

// use Zizaco\Confide\ConfideUser;
// use Zizaco\Confide\ConfideUserInterface;
// use Zizaco\Entrust\Traits\EntrustUserTrait;
// use MHSTraits\HasCompanyRole;
// use MHSTraits\HasProfileRole;
// use MHSTraits\FollowsProfiles;
// use MHSTraits\FollowsCompanies;
// use MHSTraits\FollowsHomes;

// class User extends EloquentModel implements ConfideUserInterface {
// 	use ConfideUser, EntrustUserTrait, HasCompanyRole, HasProfileRole, FollowsProfiles, FollowsCompanies, FollowsHomes;
	
// 	public static $rules = array(
// 		'username'	=> 'unique:users,username',
// 		'email'		=> 'email',
// 		'emailb' => 'email'
// 	);

// 	public $autoPurgeRedundantAttributes = true;

// 	public $autoHydrateEntityFromInput=true;
	
// 	public $forceEntityHydrationFromInput = true;

// 	protected $guarded = array();
// 	//protected $fillable = array('email','emailb','first_name','last_name','address','addressb','phone','business','city','state','username', '');

// 	public function gravatar($size = 120)
// 	{
// 		return (Config::get('view.potato') == true) ? '/img/potato.jpg' : '//www.gravatar.com/avatar/'.md5($this->email).'?s='.$size.'&d=mm&r=pg';
// 	}

// }