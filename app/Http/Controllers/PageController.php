<?php namespace App\Http\Controllers;

use App;
use App\Models\Canvas;
use View;

class PageController extends Pony {

	public function getSlug($slug)
	{	
		if(View::exists('pages.'.$slug)) {
			return view('pages.'.$slug);
		}

		App::abort(404);
	}

	public function getHelp($slug)
	{	
		//if(View::exists('pages.help'.$slug)) {
			return view('pages.help.'.$slug);
		//}

		App::abort(404);
	}

	public function getHomeOwnerPromo()
	{
		if(View::exists('pages.as.sell-a-mobile-home')) {
			return view('pages.as.sell-a-mobile-home');
		}

		//App::abort(404);
	}

	public function getParkOwnerPromo()
	{
		if(View::exists('pages.as.promote-mobile-home-park')) {
			return view('pages.as.promote-mobile-home-park');
		}

		//App::abort(404);
	}

	public function getSalesAgentPromo()
	{
		if(View::exists('pages.as.mobile-home-sales-agent')) {
			return view('pages.as.mobile-home-sales-agent');
		}

		//App::abort(404);
	}

	public function getHomeBuyerPromo()
	{
		if(View::exists('pages.as.buy-a-mobile-home')) {
			return view('pages.as.buy-a-mobile-home');
		}

		//App::abort(404);
	}

}