<?php namespace App\Http\Controllers;

use Auth;
use Request;
use URL;
use Validator;
use App\Http\Controllers\Pony;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use User;
use Hash;


class AccountController extends Pony {
	
	use AuthenticatesUsers, RegistersUsers, ResetsPasswords, SendsPasswordResetEmails {
	    AuthenticatesUsers::redirectPath insteadof RegistersUsers;
	    AuthenticatesUsers::guard insteadof RegistersUsers;
	    AuthenticatesUsers::credentials insteadof RegistersUsers;
	}

	//public $redirectAfterLogout = '/';
	private $redirectTo = '';
	private $loginPath = '';

	public function __construct() {
		$this->redirectTo = URL::route('account');
		$this->loginPath = URL::route('account-login');

		//$this->auth = $auth;
		//$this->registrar = $registrar;

		//$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getIndex()
	{
		return view('account.dashboard')
					->with('canvas', \Canvas::getDefault())
					->with('news', \News::take(5)->get());
	}

	public function getLogin()
	{
		//Not required to reach login, just to be acknowledged as a return URL :)
		$validator = Validator::make(Request::all(),
			array(
				'redirect' => 'required|regex:/(\/[a-z0-9]+)+\/?/'
			),
			array(
				'redirect.required' => 'derpderp',
				'redirect.regex' => 'derpderp'
			)
		);

		$redirect = '';
		if(!$validator->fails()) {
			$redirect = Request::input('redirect');
		}

		return view('account.login')
					->with('noheader', true)
					->with('redirect', $redirect)
					->with('canvas', \Canvas::getDefault());
	}

	public function postLogin()
	{
		$input = array(
			//'email'    => Request::input( 'username' ), // May be the username too
			'username' => Request::input( 'username' ), // so we have to pass both
			'password' => Request::input( 'password' )
		);

		if (Auth::attempt($input, (Request::input('remember', 0) == 1) )) {
			if(Request::has('redirect')) {
				$validator = Validator::make(Request::all(),
					array(
						'redirect' => 'required|regex:/(\/[a-z0-9]+)+\/?/'
					),
					array(
						'redirect.required' => 'derpderp',
						'redirect.regex' => 'derpderp'
					)
				);

				/*ATTN:KAGE
					had to make this change to get my redirects working
					will need help fixing this to work for me
				*/
				//if(!$validator->fails()) {
					return redirect()->route(Request::input('redirect'));
				//}
			}
			return redirect()->intended(route('account')); // change it to '/admin', '/dashboard' or something
		}else{
			$messageBag = new \Illuminate\Support\MessageBag(['err' => 'The login is incorrect. Please try again.']);

			return redirect()->route('account-login')
							->withInput(Request::except('password'))
							->withErrors($messageBag);
		}
	}

	public function getRegister()
	{
		return view('account.register')
					->with('canvas', \Canvas::getDefault());
	}

	public function postRegister()
	{
		$validator = Validator::make(Request::all(),
			array(
				'username' => 'required|unique:users,username|alpha_num|between:5,32',
				'email' => 'required|email|unique:users,email',
				'password' => 'required',
				'password_confirmation' => 'required|same:password',
				'agree' => 'required'
			),
			array(
				'username.required' => 'Please enter a username.',
				'username.unique' => 'That username is already taken.',
				'username.alpha_num' => 'Only letters and numbers allowed in usernames.',
				'username.between' => 'Usernames must be between 5 and 32 characters.',

				'email.required' => 'Please enter your email.',
				'email.email' => 'That email address is invalid. Double-check spelling.',
				'email.unique' => 'An account already exists with that email.',

				'password.required' => 'A password is required.',
				'password_confirmation.required' => 'You must enter the password twice.',
				'password_confirmation.same' => 'The passwords did not match.',

				'agree.required' => 'You must agree to the terms of use and privacy policy.'
			)
		);

		//return redirect()->route('account-register')
		//					->withInput(Request::except('password', 'password_confirmation'))
		//					->withErrors(new \Illuminate\Support\MessageBag(['error' => 'Invitations only. Try again later.']));


		if($validator->fails()) {
			return redirect()->route('account-register')
							->withInput(Request::except('password', 'password_confirmation'))
							->withErrors($validator);
		}

		$user = new User;

		$user->username = Request::input('username');
		$user->email = Request::input('email');
		$user->password = Hash::make(Request::input('password'));

		// The password confirmation will be removed from model
		// before saving. This field will be used in Ardent's
		// auto validation.
		//$user->password_confirmation = Request::input('password_confirmation');

		// UNCOMMENT WHEN READY. :)
		$user->confirmed = 1;

		// Save if valid. Password field will be hashed before save
		$user->save();

		if($user->id) {
			$notice = trans('confide::confide.alerts.account_created') . ' ' . trans('confide::confide.alerts.instructions_sent'); 

			Auth::loginUsingId($user->id);

			// Redirect with success message, You may replace "Lang::get(..." for your custom message.
			return redirect()->route('account')
							->with( 'notice', $notice );
		}else{
			// Get validation errors (see Ardent package)
			$error = $user->errors()->all(':message');

			return redirect()->route('account-register')
							->withInput(Request::except('password'))
							->with( 'error', $error );
		}
	}

	public function getLogout()
	{
		Auth::logout();
        
        return redirect()->route('welcome');
	}

	public function getSettings()
	{
		return view('account.settings')
					->with('canvas', \Canvas::getDefault());
	}

	public function postSettings()
	{
		$validator = Validator::make(Request::all(), array(
			'first_name' => 'required|between:2,48|alpha_dash',
			'last_name' => 'required|between:2,48|alpha_dash',
			'email' => 'required|email',
			'password_confirmation' => 'required_with:password|same:password'
		),
		array(
			'first_name.required' => 'Your first name is required.',
			'first_name.between' => 'Your first name must be between 2 and 48 characters.',
			'first_name.alpha_dash' => 'Your first name can only contain letters and dashes.',

			'last_name.required' => 'Your last name is required.',
			'last_name.between' => 'Your last name must be between 2 and 48 characters.',
			'last_name.alpha_dash' => 'Your last name can only contain letters and dashes.',

			'email.required' => 'Your email is required.',
			'email.email' => 'That email is not valid.',

			'password_confirmation.required_with' => 'You must enter the password two times.',
			'password_confirmation.same' => 'The password must be identical in both boxes.',
		));

		if($validator->fails()) {
			return redirect()->route('account-settings')
							->withErrors($validator)
							->withInput(Request::except('password', 'password_confirmation'));
		}else{
			//Save the stuff
			$me = Auth::user();

			$me->first_name = Request::input('first_name');
			$me->last_name = Request::input('last_name');
			$me->email = Request::input('email');

			if(Request::input('password', '') != ''){
				$me->password = Hash::make(Request::input('password'));
			}

			$me->save();

			return redirect()->route('account-settings')
					->with('success', 'Your profile has been updated successfully.');
		}
	}

	public function getCommunities()
	{
		return view('account.watched.communities')
					->with('communities',
						Auth::user()->followed_profiles()
							->where('type', 'Community')
							->wherePivot('watched', 1)
							->get())
					->with('canvas', \Canvas::getDefault());
	}

	public function getHomes()
	{
		return view('account.watched.homes')
					->with('homes',
						Auth::user()->followed_homes()
							->wherePivot('watched', 1)
							->get())
					->with('canvas', \Canvas::getDefault());
	}

	public function getSpaces()
	{
		return view('account.watched.spaces')
					->with('spaces',
						Auth::user()->followed_spaces()
							->wherePivot('watched', 1)
							->get())
					->with('canvas', \Canvas::getDefault());
	}

	public function getProfessionals()
	{
		return view('account.watched.professionals')
					->with('professionals',
						Auth::user()->profiles()
							->where('type', '<>', 'Community')
							->wherePivot('watched', 1)
							->get())
					->with('canvas', \Canvas::getDefault());
	}

	public function getCompanies()
	{
		return view('account.watched.companies')
					->with('companies',
						Auth::user()->followed_companies()
							->wherePivot('watched', 1)
							->get())
					->with('canvas', \Canvas::getDefault());
	}

	public function getHelp()
	{
		return view('account.help')
					->with('canvas', \Canvas::getDefault());
	}

	public function getRecovery()
	{
		return view('account.recovery')
					->with('canvas', \Canvas::getDefault());
	}

}