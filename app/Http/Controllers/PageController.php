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

}