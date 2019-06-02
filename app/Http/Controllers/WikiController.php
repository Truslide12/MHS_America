<?php namespace App\Http\Controllers;

use Auth;
use App\Models\WikipageRepository;
use View;

class WikiController extends Pony {

	private $pages;

	public function __construct(WikipageRepository $pages)
	{
		$user = Auth::user();

		// Sharing is caring
		View::share('user', $user);
		$this->pages = $pages;
	}

	public function showPage($page)
	{
		$page = $this->pages->getPage($page);

		return view('developers.wiki', array('page' => $page));
	}
}