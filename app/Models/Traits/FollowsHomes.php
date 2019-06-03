<?php

namespace App\Models\Traits;
use App\Models\Role;
use App\Models\Home;

trait FollowsHomes {

    public function followed_homes()
    {
        return $this->belongsToMany(Home::class, 'home_user_follows')->withPivot('watched', 'kudos');
    }

    public function watchesHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) return false;

        return ($home->pivot->watched == 1);
    }

    public function kudosHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) return false;

        return ($home->pivot->kudos == 1);
    }

    public function toggleWatchHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            $this->followHome($homeid);
            $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();
            if(is_null($home)) return false;

            $this->watchHome($home);
            return $this->watchesHome($home->id);
        }

        if($this->watchesHome($home->id)) {
            $this->unwatchHome($home->id);
            return !($this->watchesHome($home->id));
        }else{
            $this->watchHome($home->id);
            return $this->watchesHome($home->id);
        }
    }

    public function toggleKudoHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            $this->followHome($homeid);
            $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();
            if(is_null($home)) return false;

            $this->kudoHome($home);
            return $this->kudosHome($home->id);
        }

        if($this->kudosHome($home->id)) {
            $this->unkudoHome($home->id);
            return !($this->kudosHome($home->id));
        }else{
            $this->kudoHome($home->id);
            return $this->kudosHome($home->id);
        }
    }

    public function watchHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            $this->followHome($homeid);
            $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();
            if(is_null($home)) return false;
        }

        $this->followed_homes()->updateExistingPivot($home->id, array('watched' => 1));
    }

    public function unwatchHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            return true;
        }

        $this->followed_homes()->updateExistingPivot($home->id, array('watched' => 0));
    }

    public function kudoHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            $this->followHome($homeid);
            $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();
            if(is_null($home)) return false;
        }

        $this->followed_homes()->updateExistingPivot($home->id, array('kudos' => 1));
    }

    public function unkudoHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) {
            return true;
        }

        $this->followed_homes()->updateExistingPivot($home->id, array('kudos' => 0));
    }

    public function followHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(!is_null($home)) return false;

        $this->followed_homes()->attach($homeid);

        return true;
    }

    public function unfollowHome($homeid)
    {
        if(is_object($homeid)) $homeid = $homeid->id;

        if(is_array($homeid)) $homeid = $homeid['id'];

        $home = $this->followed_homes()->wherePivot('home_id', $homeid)->first();

        if(is_null($home)) return true;

        $this->followed_homes()->detach($homeid);

        return true;
    }

}