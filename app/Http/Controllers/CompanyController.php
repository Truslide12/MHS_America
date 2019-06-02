<?php namespace App\Http\Controllers;

use  App\Http\Controllers\Pony;
use Auth;
use App\Models\Company;
use Input;

class CompanyController extends Pony {
	

	public function getIndex(Company $company)
	{
		return view('companies.home')
					->with('company', $company)
					->with('news', $company->newsitems()->where('public', 1)->paginate(10))
					->with('contentclass', 'texture-1');
	}

	public function getInfo(Company $company)
	{
		return view('companies.info')
					->with('company', $company)
					->with('contentclass', 'texture-1');
	}

	public function getCommunities(Company $company)
	{
		return view('companies.communities')
					->with('company', $company)
					->with('communities', $company->communities)
					->with('hide_company_links', true)
					->with('contentclass', 'texture-1');
	}

	public function getProfiles(Company $company)
	{
		return view('companies.profiles')
					->with('company', $company)
					->with('contentclass', 'texture-1');
	}

	public function postWatch(Company $company)
	{
		$user = Auth::user();

		if($user->toggleWatchCompany($company)) {
			if(Input::get('ref', '') == 'account-watched') {
				return redirect()->route('account-companies');
			}else{
				return redirect()->route('company', array('company' => $company->id));
			}
		}else{
			$messageBag = new \Illuminate\Support\MessageBag();
			$messageBag->add('error', 'The action failed.');
			return redirect()->route('account-companies')
							->withErrors($messageBag);
		}

	}

	public function postKudos(Company $company)
	{
		$user = Auth::user();

		if($user->toggleKudoCompany($company)) {
			return redirect()->route('company', array('company' => $company->id));
		}else{
			$messageBag = new \Illuminate\Support\MessageBag();
			$messageBag->add('error', 'The action failed.');
			return redirect()->route('account-companies')
							->withErrors($messageBag);
		}

	}

}