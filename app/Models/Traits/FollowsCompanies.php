<?php

namespace App\Models\Traits;
use App\Models\Role;
use App\Models\Company;

trait FollowsCompanies {

	public function followed_companies()
	{
		return $this->belongsToMany(Company::class, 'company_user_follows')->withPivot('watched', 'kudos');
	}

	public function watchesCompany($companyid)
	{
		if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

		if(is_null($company)) return false;

		return ($company->pivot->watched == 1);
	}

    public function kudosCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) return false;

        return ($company->pivot->kudos == 1);
    }

    public function toggleWatchCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            $this->followCompany($companyid);
            $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();
            if(is_null($company)) return false;

            $this->watchCompany($company);
            return $this->watchesCompany($company->id);
        }

        if($this->watchesCompany($company->id)) {
            $this->unwatchCompany($company->id);
            return !($this->watchesCompany($company->id));
        }else{
            $this->watchCompany($company->id);
            return $this->watchesCompany($company->id);
        }
    }

    public function toggleKudoCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            $this->followCompany($companyid);
            $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();
            if(is_null($company)) return false;

            $this->kudoCompany($company);
            return $this->kudosCompany($company->id);
        }

        if($this->kudosCompany($company->id)) {
            $this->unkudoCompany($company->id);
            return !($this->kudosCompany($company->id));
        }else{
            $this->kudoCompany($company->id);
            return $this->kudosCompany($company->id);
        }
    }

    public function watchCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            $this->followCompany($companyid);
            $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();
            if(is_null($company)) return false;
        }

        $this->followed_companies()->updateExistingPivot($company->id, array('watched' => 1));
    }

    public function unwatchCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            return true;
        }

        $this->followed_companies()->updateExistingPivot($company->id, array('watched' => 0));
    }

	public function kudoCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            $this->followCompany($companyid);
            $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();
            if(is_null($company)) return false;
        }

        $this->followed_companies()->updateExistingPivot($company->id, array('kudos' => 1));
    }

    public function unkudoCompany($companyid)
    {
        if(is_object($companyid)) $companyid = $companyid->id;

        if(is_array($companyid)) $companyid = $companyid['id'];

        $company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

        if(is_null($company)) {
            return true;
        }

        $this->followed_companies()->updateExistingPivot($company->id, array('kudos' => 0));
    }

    public function followCompany($companyid)
    {
    	if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

    	$company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

		if(!is_null($company)) return false;

		$this->followed_companies()->attach($companyid);

		return true;
    }

    public function unfollowCompany($companyid)
    {
    	if(is_object($companyid)) $companyid = $companyid->id;

    	if(is_array($companyid)) $companyid = $companyid['id'];

    	$company = $this->followed_companies()->wherePivot('company_id', $companyid)->first();

		if(is_null($company)) return true;

		$this->followed_companies()->detach($companyid);

		return true;
    }

}