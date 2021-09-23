<?php namespace App\Http\Controllers;

use App\Models\Canvas;

class DeveloperController extends Pony {

	public function getIndex()
	{
		return view('developers.home')
					->with('canvas', Canvas::getDefault());
	}

}