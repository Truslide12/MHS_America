<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Redirect;
use View;

class ModController extends Pony {

	public function getIndex()
	{
		return view('admin.moderation.home')
					->with('title', 'Moderation Center')
					->with('menutitle', 'Moderation Menu');
	}

}