<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunitySpotlight extends EloquentModel {
	protected $softDelete = true;
	use SoftDeletes;
	protected $table = 'community_spotlight';

	public function Community()
	{
		return $this->belongsTo(Profile::class, 'community_id', 'id');
	}

	public function isActive() {

		$now = strtotime("now");
		$start = strtotime($this->starts_at);
		$end = strtotime($this->expires_at);

		if ( $start > $now ) { return (object)["id"=>0,"name"=>"pending","title"=>"Pending"]; }
		if( $end < $now ) { return (object)["id"=>1,"name"=>"expired","title"=>"Expired"]; }
		return (object)["id"=>2,"name"=>"active","title"=>"Active"];
	}

	public function hitIt()
	{
		$this->impressions = $this->impressions + 1;
		$this->save();
	}

}