<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Home;
use App\Models\Profile;
use Input;

class HomeController extends Pony {
	
	public function getIndex(Home $home, Profile $profile)
	{
		//$profile = $home->profiles()->byType('Community')->first();

		return view('home')
					->with('home', $home)
					->with('profile', $profile);
	}

	public function postWatch(Home $home)
	{
		//Watch home
		if(Auth::check()) Auth::user()->toggleWatchHome($home->id);

		return redirect()->route('home', array('home' => $home->id));
	}

	public function getMessage(Home $home)
	{
		//Contact seller
		

		return redirect()->route('home', array('home' => $home->id));
	}

}