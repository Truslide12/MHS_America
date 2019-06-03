<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model as Eloquent;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\Traits\HasCompanyRole;
use App\Models\Traits\HasProfileRole;
use App\Models\Traits\FollowsProfiles;
use App\Models\Traits\FollowsCompanies;
use App\Models\Traits\FollowsHomes;
use App\Models\Traits\FollowsSpaces;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Eloquent
{
    use EntrustUserTrait, HasCompanyRole, HasProfileRole, FollowsProfiles, FollowsCompanies, FollowsHomes, FollowsSpaces, SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the link to the user's gravatar image.
     *
     * @param  string  $size = 120
     * @return string
     */
    public function gravatar($size = 120)
    {
        return (\Config::get('view.potato') == true) ? '/img/potato.jpg' : '//www.gravatar.com/avatar/'.md5($this->email).'?s='.$size.'&d=mm&r=pg';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->attributes['id'];
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    /**
     * Get the "remember me" token value.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->attributes[$this->getRememberTokenName()];
    }

    /**
     * Set the "remember me" token value.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->attributes[$this->getRememberTokenName()] = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function getFullName()
    {
        return ($this->first_name == '' || $this->last_name == '') ? $this->username : $this->first_name.' '.$this->last_name;
    }
}
