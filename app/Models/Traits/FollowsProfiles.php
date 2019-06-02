<?php

namespace MHSTraits;
use Role;

trait FollowsProfiles {

    public function followed_profiles()
    {
        return $this->belongsToMany('Profile', 'profile_user_follows')->withPivot('watched', 'kudos');
    }

    public function watchesProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) return false;

        return ($profile->pivot->watched == 1);
    }

    public function kudosProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) return false;

        return ($profile->pivot->kudos == 1);
    }

    public function toggleWatchProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            $this->followProfile($profileid);
            $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();
            if(is_null($profile)) return false;

            $this->watchProfile($profile);
            return $this->watchesProfile($profile->id);
        }

        if($this->watchesProfile($profile->id)) {
            $this->unwatchProfile($profile->id);
            return !($this->watchesProfile($profile->id));
        }else{
            $this->watchProfile($profile->id);
            return $this->watchesProfile($profile->id);
        }
    }

    public function toggleKudoProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            $this->followProfile($profileid);
            $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();
            if(is_null($profile)) return false;

            $this->kudoProfile($profile);
            return $this->kudosProfile($profile->id);
        }

        if($this->kudosProfile($profile->id)) {
            $this->unkudoProfile($profile->id);
            return !($this->kudosProfile($profile->id));
        }else{
            $this->kudoProfile($profile->id);
            return $this->kudosProfile($profile->id);
        }
    }

    public function watchProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            $this->followProfile($profileid);
            $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();
            if(is_null($profile)) return false;
        }

        $this->followed_profiles()->updateExistingPivot($profile->id, array('watched' => 1));
    }

    public function unwatchProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            return true;
        }

        $this->followed_profiles()->updateExistingPivot($profile->id, array('watched' => 0));
    }

    public function kudoProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            $this->followProfile($profileid);
            $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();
            if(is_null($profile)) return false;
        }

        $this->followed_profiles()->updateExistingPivot($profile->id, array('kudos' => 1));
    }

    public function unkudoProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) {
            return true;
        }

        $this->followed_profiles()->updateExistingPivot($profile->id, array('kudos' => 0));
    }

    public function followProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(!is_null($profile)) return false;

        $this->followed_profiles()->attach($profileid);

        return true;
    }

    public function unfollowProfile($profileid)
    {
        if(is_object($profileid)) $profileid = $profileid->id;

        if(is_array($profileid)) $profileid = $profileid['id'];

        $profile = $this->followed_profiles()->wherePivot('profile_id', $profileid)->first();

        if(is_null($profile)) return true;

        $this->followed_profiles()->detach($profileid);

        return true;
    }

}