<?php

namespace App\Http\Controllers;

use Auth;
use View;

/* 
 * And like the path cut through the orchard,
 * there'll always be a way through.
 * 
 *    ~ Twilight Sparkle
 */

class Pony extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = view($this->layout);
		}
	}

	public function __construct()
	{
		$user = Auth::user();

		// Sharing is caring
		View::share('user', $user);
	}

}