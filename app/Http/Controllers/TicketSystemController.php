<?php namespace App\Http\Controllers;

use  App\Http\Controllers\Pony;
use Auth;
use App\Models\Company;
use Input;

class TicketSystemController extends Pony {
	

	public function getIndex(Company $company)
	{
		return view('ticketsystem.home');
	}



}