<?php

namespace App\Models;

use URL;

class Report extends EloquentModel {
	
	protected $table = 'reports';

	protected $guarded = [];
    
    public static function existsFrom($type, $link_id, $user_id)
    {
        return (Report::whereType($type)->where('link_id', $link_id)
                                        ->leftJoin('report_accusers', 'reports.id', '=', 'report_accusers.report_id')
                                        ->where('user_id', $user_id)
                                        ->count() > 0);
    }
    
    //For staff members (checking reported PMs)
    public static function exists($type, $link_id)
    {
        return (Report::whereType($type)->where('link_id', $link_id)
                                        ->count() > 0);
    }
    
    public function accusers()
    {
        return $this->hasMany(ReportAccuser::class, 'report_id');
    }

	public function rascal()
	{
		return $this->belongsTo(User::class, 'rascal_id')->withTrashed();
	}
    
    public function moderator()
	{
		return $this->belongsTo(User::class, 'moderator_id');
	}

	public function subject()
	{
		return $this->belongsTo(studly_case($this->type), 'link_id');
	}
    
    public function viewLink()
    {
        try {
            $subject = $this->subject()->get()->first();
            if(!is_object($subject))
            {
                return false;
            }
            switch($this->type) {
                case 'profile':
                    return URL::route('profile', ['profile' => $subject->id]);
                    break;
            }
        } catch(\Throwable $e) {
            return false;
        }
        
        return false;
    }

	public function scopeForMe($query)
	{
		/* TODO */
		return $query;
	}

	public function scopeUnresolved($query)
	{
		return $query->where('resolved', 0);
	}

	public function scopeResolved($query)
	{
		return $query->where('resolved', 1);
	}

}