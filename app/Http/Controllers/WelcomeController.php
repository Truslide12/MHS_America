<?php namespace App\Http\Controllers;

use Cookie;
use App\Models\Canvas;
use App\Models\Home;
use App\Models\Profile;
use App\Models\State;
use App\Models\CommunitySpotlight;
class WelcomeController extends Pony {

	public function getIndex()
	{
		//need to build admin panel option to change this..
		//invalid park id results in default
		$time = date("m/d/y", strtotime("now"));

		$comid = CommunitySpotlight::where('starts_at', '<=', $time )
									->where('expires_at', '>=', $time)->first();
		if ( is_object($comid) ) {
			$community_of_week = Profile::find($comid->community_id);
			if ( $community_of_week->photos() ) {
				$community_of_week->cover = $community_of_week->photos()->first()->cover;
			} else {
				$community_of_week->cover = "nocover";
			}
		} else {
			$community_of_week = (object)['title'=>'None', 'description'=>'We don\'t seem to have a mobile home park selected for Community of the Week. If you would like to see your community here, be sure to <a href=\'/page/community-plans\'>create a paid profile</a>. We select one community from our paid profiles each week to be featured here.', 'cover' => 'nocover', 'week'=>'', ];
		}
		
		$community_of_week->week = date("m/d/y", strtotime('last monday', strtotime('tomorrow')));

		$blademode = "";
		if ( isset($_GET["full"]) ) { $blademode = "-full"; }
		
		$response = view('welcome'.$blademode)
					->with('latest_communities', Profile::byType('Community')->latest(5))
					->with('latest_homes', Home::latest(5))
					->with('hide_community_images', true)
					->with('hide_home_images', true)
					->with('community_of_week', $community_of_week)
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
	
	public function getPromo()
	{

		$response = view('promote.buy-mobile-home')
					->with('nofooter', true)
					->with('canvas', Canvas::getDefault());

		return $response;
	}

}

