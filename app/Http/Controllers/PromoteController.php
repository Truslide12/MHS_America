<?php namespace App\Http\Controllers;

class PromoteController extends Pony {
	
	public function getPromoteCommunity()
	{
		return view('promote.community')
					->with('nofooter', true);
	}

	public function getPromoteProfessional()
	{
		return view('promote.professional')
					->with('nofooter', true);
	}

}