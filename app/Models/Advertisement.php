<?php

namespace App\Models;

class Advertisement extends EloquentModel {
	
	protected $table = 'advertisements';

	public static function pullStateBlocks($state, $count = 1)
	{
		$blocks = Advertisement::stateBlocks($state)->enabled()->get();
		$possibilities = array();
		$gcd = 0;
		foreach($blocks as $block) {
			for($i = 0; $i < $block->ratio($gcd); $i++) {
				$possibilities[] = $block->id;
			}
		}
		$items = array();
		shuffle($possibilities);
		for($i = 0; $i < min($count, count($blocks)); $i++) {
			$max = count($possibilities)-1;

			$chosen = array_shift($possibilities);
			$bl = $blocks->find($chosen);
			if(is_object($bl)) {
				$bl->shown_impressions++;
				$bl->save();
				$items[] = $bl;
			}

			for($j = 0; $j < count($possibilities); $j++) {
				if($possibilities[$j] == $chosen) $possibilities[$j] = 0;
			}
			$count = min($count, count($blocks));
			$possibilities = array_values($possibilities);
		}

		return new Illuminate\Database\Eloquent\Collection($items);
	}

	public function scopeStateBlocks($query, $state)
	{
		return $query->where('type', '=', 'state')->where('location', '=', $state);
	}

	public function scopeEnabled($query)
	{
		return $query->where('disabled', '=', 0);
	}

	public static function anyForState($state)
	{
		$block_count = Advertisement::stateBlocks($state)->enabled()->where('shown_impressions', '<', DB::raw('paid_impressions'))->count();
		return ($block_count > 0);
	}

	public function ratio($gcd = 0)
	{
		if($this->paid_impressions == 0 || $this->shown_impressions == $this->paid_impressions) return 0;
		$ratio = ceil((1-($this->shown_impressions / $this->paid_impressions))*100);
		if($gcd > 0) {
			$ratio = gcd($ratio, $gcd);
		}
		return $ratio;
	}

	public function isProfile()
	{
		return ($this->profile_id > 0);
	}

	public function profile()
	{
		return $this->belongsTo('Profile');
	}

	public function pageWatching()
	{
		$profile = $this->profile;
		return (!is_object($profile)) ? 0 : $profile->watchers();
	}

	public function pageKudos()
	{
		$profile = $this->profile;
		return (!is_object($profile)) ? 0 : $profile->kudos();
	}

	public function pageDescription()
	{
		$profile = $this->profile;
		return (!is_object($profile)) ? '' : $profile->description;
	}

}