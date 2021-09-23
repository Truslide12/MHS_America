<?php

namespace App\Models\Traits;
use App\Models\Role;
use App\Models\Company;
use App\Models\Profile;
use App\Models\ProfileUser;
use App\Models\HomeUser;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Session;

trait HasProfileRole {
	
	public function profiles($company = null)
	{
		$query = $this->belongsToMany(Profile::class);

		if(is_object($company)) $query = $query->where('profiles.company_id', $company->id);

		if(!is_object($company) && !is_null($company) && is_numeric($company) && is_object(Company::find($company))) $query = $query->where('profiles.company_id', $company);

		return $query->withPivot('role_id', 'company_id');
	}

	public function shared_profiles($company = null)
	{
		$query = $this->hasMany(ProfileUser::class, 'user_id');

		return $query;
	}

	public function shared_homes($company = null)
	{
		$query = $this->hasMany(HomeUser::class, 'user_id');

		return $query;
	}

	public function canForProfile($permission, $profileid)
	{
		if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

		$profile = $this->profiles->find($profileid);

		//Am I even a part of this profile?
		if(is_null($profile)) return false;

		//Company-run!
		if($profile->pivot->company_id > 0) {
			$company = $this->companies->find($profile->pivot->company_id);

			//Am I even a part of this company?
			if(is_null($company)) return false;

			//Can I even do anything to any profiles in this company?
			if(!$this->canForCompany('edit', $company->id)) return false;
		}
		

		//No is a good default.
        //$permission_value = false;

        //Fetch user's role and default role permissions
        $role = Role::find($profile->pivot->role_id);
        $role_perms = $role->perms->pluck('name')->all();

        //Check if the permission's name is listed
        return (is_array($role_perms) && in_array($permission, $role_perms) );

        // Validate against the Permission table
        // foreach ($role->perms as $perm) {
        //     if ($perm->name == $permission) {
        //         return true;
        //     }
        // }

        //No is a good default.
        //return false;
	}

	public function hasRoleForProfile($name, $profileid)
	{
		if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

		$profile = $this->profiles->find($profileid);

		if(is_null($profile)) return false;

		if($profile->pivot->company_id > 0) {
			$company = $this->companies->find($profile->pivot->company_id);
			if(is_null($company)) return false;

			return $this->hasRoleForCompany($name, $company->id);
		}

		return (Role::find($profile->pivot->role_id)->name == $name);
	}

	public function attachRoleForProfile($role, $profileid)
    {
    	if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

    	$profile = $this->profiles->find($profileid);

		if(is_null($profile)) return false;

        if( is_object($role))
            $role = $role->getKey();

        if( is_array($role))
            $role = $role['id'];

        $this->profiles()->updateExistingPivot($profile->id, array('role_id' => $role));
    }

    public function attachToProfile($profileid, $role)
    {
    	if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

    	if(is_object($role)) $role = $role->getKey();

    	if(is_array($role)) $role = $role['id'];

    	$profile = $this->profiles->find($profileid);

		if(!is_null($profile)) return false;

		$this->profiles()->attach($profileid, array('role_id' => $role));

		return true;
    }

    public function detachfromProfile($profileid)
    {
    	if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

    	$profile = $this->profiles->find($profileid);

		if(!is_null($profile)) return true;

		$this->profiles()->detach($profileid);

		return true;
    }

    public function profileRole($profileid)
	{
		if(is_object($profileid)) $profileid = $profileid->id;

    	if(is_array($profileid)) $profileid = $profileid['id'];

		$profile = $this->profiles->find($profileid);

		if(is_null($profile)) return false;

		return Role::find($profile->pivot->role_id);
	}

}