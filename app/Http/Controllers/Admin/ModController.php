<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Auth;
use Redirect;
use View;
use App\Models\Report;

class ModController extends Pony {

	public function getIndex()
	{
		if(Input::has('resolved')){
            return view('admin.moderation.home')
					->with('title', 'Moderation Center')
					->with('menutitle', 'Moderation Menu')
					->with('reports', Report::where('rascal_id', '!=', Auth::id())->orderBy('id', 'desc')->paginate(15))
					->with('me', Auth::user())
                    ->with('showResolved', true);
        }
        else{
            return view('admin.moderation.home')
					->with('title', 'Moderation Center')
					->with('menutitle', 'Moderation Menu')
					->with('reports', Report::unresolved()->where('rascal_id', '!=', Auth::id())->orderBy('id', 'desc')->paginate(15))
					->with('me', Auth::user())
                    ->with('showResolved', false);
        }
	}

}