<?php

namespace App\Models\Traits;
use App\Models\Role;
use App\Models\Company;
use App\Models\CompanyUser;
use Session;

trait HasCompanyRole {
	
	public function companies()
	{
		return $this->belongsToMany(Company::class)->withPivot('id', 'role_id');
	}

	public function canForCompany($permission, $companyid)
	{
		if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

		$companies = $this->companies;
        $company = false;
        foreach($companies as $comp) {
            if($comp->id == $companyid) {
                $company = $comp;
            }
        }

        //User's not even part of that company. Beat it.
		if(!is_object($company)) return false;

        //Check if there's a lockout and if we have bypass,
        //assuming this perm isn't `initiate_lockout`,
        //because we don't want an infinite loop. x3
        if($company->lockout == 1 && !in_array($permission, array('initiate_lockout', 'lift_lockout') ) ) {
            $bypass = $this->canForCompany('initiate_lockout', $company->id) || $this->canForCompany('lift_lockout', $company->id);
            if(!$bypass) {
                return false;
            }
        }

        //No is a good default.
        $permission_value = false;

        //Fetch user's role and default role permissions
        $role = Role::find($company->pivot->role_id);
        $role_perms = $role->perms->pluck('name')->all();

        //Check if the permission's name is listed
        $permission_value = (is_array($role_perms) && in_array($permission, $role_perms) );

        //Fetch company-to-user-specific role permissions - allow them to override the defaults
        $company_user = CompanyUser::find($company->pivot->id);

        //We'll want to access the `active` field for our value - not just the name being present
        //as sometimes these overrides will want to remove access - not just add to it
        $company_user_perms = $company_user->permissions;
        foreach ($company_user_perms as $perm_link) {
            $perm = $perm_link->permission;
            if ($perm->name == $permission) {
                $permission_value = !($perm_link->active);
            }
        }

        return $permission_value;
	}

	public function hasRoleForCompany($name, $companyid)
	{
		if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

		$company = $this->companies->find($companyid);

		if(is_null($company)) return false;

		return (Role::find($company->pivot->role_id)->name == $name);
	}

    public function roleForCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->companies->find($companyid);

        if(is_null($company)) return false;

        return Role::find($company->pivot->role_id);
    }

    public function mayI($action, $companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->companies->find($companyid);

        if(is_null($company)) return false;

        $my_role = Role::find($company->pivot->role_id);
        $perms = str_split($my_role->permissions);

        switch($action) {
            case "initiate_lockout":
                return self::tof($perms[0]);
            break;
            case "lift_lockout":
                return self::tof($perms[1]);
            break;
            case "manage_users":
                return self::tof($perms[2]);
            break;
            case "manage_billing_methods":
                return self::tof($perms[3]);
            break;
            case "global_card_access":
                return self::tof($perms[4]);
            break;
            case "global_profile_access":
                return self::tof($perms[5]);
            break;
            default:
                return false;
            break;
        }
    }

    private function tof ($i) { ($i==1) ? true : false; }

    public function isAdminForCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->companies->find($companyid);

        if(is_null($company)) return false;

        return ($company->pivot->admin === true);
    }

	public function attachRoleForCompany($role, $companyid)
    {
    	if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

    	$company = $this->companies->find($companyid);

		if(is_null($company)) return false;

        if( is_object($role))
            $role = $role->getKey();

        if( is_array($role))
            $role = $role['id'];

        if(!is_int($role)) return false;

        //Verify role exists
        if(!is_a(Role::find($role), \Illuminate\Database\Eloquent\Model)) {
            return false;
        }

        $this->companies()->updateExistingPivot($company->id, array('role_id' => $role));

        return true;
    }

    public function attachToCompany($companyid, $role)
    {
    	if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

    	if(is_object($role)) $role = $role->id;

    	if(is_array($role)) $role = $role['id'];

        if(is_string($role)) $role = Role::whereName($role)->first()->id;

        if(!is_int($role)) return false;

        //Verify role exists
        if(!is_a(Role::find($role), \Illuminate\Database\Eloquent\Model)) {
            return false;
        }

    	$company = $this->companies->find($companyid);

		if(!is_null($company)) return false;

		$this->companies()->attach($companyid, array('role_id' => $role));

		return true;
    }

    public function detachFromCompany($companyid)
    {
    	if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

    	$company = $this->companies->find($companyid);

		if(!is_null($company)) return true;

		$this->companies()->detach($companyid);

		return true;
    }

}