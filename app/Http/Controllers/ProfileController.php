<?php namespace App\Http\Controllers;

use Auth;
use Exception;
use Input;
use App\Models\Profile;

class ProfileController extends Pony {

	public function getIndex(Profile $profile)
	{
		return $profile->fetchTemplate();
	}

	public function postWatch(Profile $profile)
	{
		$user = Auth::user();

		if($user->toggleWatchProfile($profile)) {
			if(Input::get('ref', '') == 'account-watched') {
				if($profile->type == 'Community') {
					return redirect()->route('account-communities');
				}else{
					return redirect()->route('account-professionals');
				}
			}elseif(Input::get('ref', '') != '' && strpos(Input::get('ref',''),'//') === false && strpos(Input::get('ref',''),':') === false) {
				try {
					return redirect(Input::get('ref'));
				} catch (Exception $e) {
					$messageBag = new \Illuminate\Support\MessageBag();
					$messageBag->add('error', 'The redirect failed, but the action succeeded.');
					if($profile->type == 'Community') {
						return redirect()->route('account-communities')
									->withErrors($messageBag);
					}else{
						return redirect()->route('account-professionals')
									->withErrors($messageBag);
					}
				}
			}else{
				return redirect()->route('profile', array('profile' => $profile->id));
			}
		}else{
			$messageBag = new \Illuminate\Support\MessageBag();
			$messageBag->add('error', 'The action failed.');
			if($profile->type == 'Community') {
				return redirect()->route('account-communities')
							->withErrors($messageBag);
			}else{
				return redirect()->route('account-professionals')
							->withErrors($messageBag);
			}
		}

	}

	public function postKudos(Profile $profile)
	{
		$user = Auth::user();

		if($user->toggleKudoProfile($profile)) {
			if(Input::get('ref', '') != '' && strpos(Input::get('ref',''),'//') === false && strpos(Input::get('ref',''),':') === false) {
				try {
					return redirect(Input::get('ref'));
				} catch (Exception $e) {
					$messageBag = new \Illuminate\Support\MessageBag();
					$messageBag->add('error', 'The redirect failed, but the action succeeded.');
					return redirect()->route('profile', array('profile' => $profile->id))
									->withErrors($messageBag);
				}
			}else{
				return redirect()->route('profile', array('profile' => $profile->id));
			}
		}else{
			$messageBag = new \Illuminate\Support\MessageBag();
			$messageBag->add('error', 'The action failed.');
			return redirect()->route('profile', array('profile' => $profile->id))
							->withErrors($messageBag);
		}

	}

}