<?php namespace App\Http\Controllers;

use Response;

class ErrorController extends Pony {
	
	public function getNotFound()
	{
		return Response::make(view('errors.missing'), 404);
	}

	public function getServerError()
	{
		return Response::make(view('errors.uh-oh'), 500);
	}

}