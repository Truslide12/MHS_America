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
		if(View::exists('pages.as.HomeOwner')) {
			return view('pages.as.HomeOwner');
		}

		//App::abort(404);
	}

	public function getParkOwnerPromo()
	{
		if(View::exists('pages.as.ParkOwner')) {
			return view('pages.as.ParkOwner');
		}

		//App::abort(404);
	}

	public function getSalesAgentPromo()
	{
		if(View::exists('pages.as.SalesAgent')) {
			return view('pages.as.SalesAgent');
		}

		//App::abort(404);
	}

	public function getHomeBuyerPromo()
	{
		if(View::exists('pages.as.HomeBuyer')) {
			return view('pages.as.HomeBuyer');
		}

		//App::abort(404);
	}

}