<?php namespace App\Http\Controllers;

use Cookie;
use App\Models\Canvas;
use App\Models\Home;
use App\Models\Profile;
use App\Models\State;

class WelcomeController extends Pony {

	public function getIndex()
	{
		$response = view('welcome')
					->with('latest_communities', Profile::byType('Community')->latest(5))
					->with('latest_homes', Home::latest(5))
					->with('hide_community_images', true)
					->with('hide_home_images', true)
					->with('canvas', Canvas::getDefault());

		$welcomebox = true;
		if(Cookie::get('welcomebox') == 'pony') {
			$welcomebox = false;
		}else{
			$response->withCookie(Cookie::forever('welcomebox', 'pony'));
		}

		$response->with('welcomebox', $welcomebox);

		return $response;
	}
	
}