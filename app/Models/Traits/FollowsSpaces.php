<?php

namespace MHSTraits;
use Role;

trait FollowsSpaces {

    public function followed_spaces()
    {
        return $this->belongsToMany('Space', 'space_user_follows')->withPivot('watched', 'kudos');
    }

    public function watchesSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) return false;

        return ($space->pivot->watched == 1);
    }

    public function kudosSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) return false;

        return ($space->pivot->kudos == 1);
    }

    public function toggleWatchSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            $this->followSpace($space_id);
            $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();
            if(is_null($space)) return false;

            $this->watchSpace($space);
            return $this->watchesSpace($space->id);
        }

        if($this->watchesSpace($space->id)) {
            $this->unwatchSpace($space->id);
            return !($this->watchesSpace($space->id));
        }else{
            $this->watchSpace($space->id);
            return $this->watchesSpace($space->id);
        }
    }

    public function toggleKudoSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            $this->followSpace($space_id);
            $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();
            if(is_null($space)) return false;

            $this->kudoSpace($space);
            return $this->kudosSpace($space->id);
        }

        if($this->kudosSpace($space->id)) {
            $this->unkudoSpace($space->id);
            return !($this->kudosSpace($space->id));
        }else{
            $this->kudoSpace($space->id);
            return $this->kudosSpace($space->id);
        }
    }

    public function watchSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            $this->followSpace($space_id);
            $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();
            if(is_null($space)) return false;
        }

        $this->followed_spaces()->updateExistingPivot($space->id, array('watched' => 1));
    }

    public function unwatchSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            return true;
        }

        $this->followed_spaces()->updateExistingPivot($space->id, array('watched' => 0));
    }

    public function kudoSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            $this->followSpace($space_id);
            $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();
            if(is_null($space)) return false;
        }

        $this->followed_spaces()->updateExistingPivot($space->id, array('kudos' => 1));
    }

    public function unkudoSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) {
            return true;
        }

        $this->followed_spaces()->updateExistingPivot($space->id, array('kudos' => 0));
    }

    public function followSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(!is_null($space)) return false;

        $this->followed_spaces()->attach($space_id);

        return true;
    }

    public function unfollowSpace($space_id)
    {
        if(is_object($space_id)) $space_id = $space_id->id;

        if(is_array($space_id)) $space_id = $space_id['id'];

        $space = $this->followed_spaces()->wherePivot('space_id', $space_id)->first();

        if(is_null($space)) return true;

        $this->followed_spaces()->detach($space_id);

        return true;
    }

}