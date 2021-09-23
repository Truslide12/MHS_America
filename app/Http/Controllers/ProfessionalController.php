<?php namespace App\Http\Controllers;

use App\Models\Professional;

class ProfessionalController extends Pony {

	public function getProfile(Professional $professional)
	{
		return view('profiles.professional')
					->with('profile', $professional)
					->with('city', $professional->city)
					->with('county', $professional->county)
					->with('state', $professional->state);
	}

}