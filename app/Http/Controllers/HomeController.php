<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Home;
use App\Models\Profile;
use App\Models\Company;
use Input;
use Validator;
use Request;
use App\Mail\HomeSaleContactSent;
use Mail;

class HomeController extends Pony {
	
	public function getIndex(Home $home, Profile $profile)
	{
		//$profile = $home->profiles()->byType('Community')->first();

		if ( $home->status > 1 ) {
			return view('home')
				->with('home', $home)
				->with('profile', $profile);
		} else {
			return view('homeisprivate')
					->with('homeid', $home->id);
		}
	}

	public function ContactHomeSeller(Home $home)
	{
		$validator = Validator::make(Request::all(), [
			'name' => 'required|between:4,64',
			'phone' => 'required|phone:US',
			'email' => 'required|email',
			'message' => 'required|string|min:10|max:250'

		], [
			'name.required' => 'You must provide a name',
			'name.between' => 'Your name must be between 4 and 64 characters.',
			'phone.phone' => 'Phone number is invalid',
			'email.required' => 'You must provide an email address.',
			'email.email' => 'The value provided is not a valid email address.',
			'message.max' => 'Description must be under 500 characters'
		]);

		if($validator->fails()) {

			return redirect()->back()
						->withInput()
						->withErrors($validator);
		}


		$company = Company::where('id', $home->company_id)->first();

		$seller = (object)json_decode( $home->seller_info );
		if ( property_exists($seller, 'email') ) {
			if( filter_var( $seller->email, FILTER_VALIDATE_EMAIL ) === false ) {
				$email = $company->stripe_customer_email;
			} else {
				$email = $seller->email;
			}
		} else {
			$email = $company->stripe_customer_email;
		}

        $contact = [
        	"name"=>Input::get('name'),
        	"phone"=>Input::get('phone'),
        	"email"=>Input::get('email'),
        	"message"=>Input::get('message')
        ];

		if(is_object($home) && is_a($home, Home::class)) {
			$message = (new HomeSaleContactSent($home, $contact))->onQueue('emails');
			Mail::to($email)->queue($message);
			return redirect()->back()
			->withInput()
			->withSuccess(['Message Sent!']);
		} else {
			return redirect()->back()
			->withInput()
			->withErrors(["Unexpected Error"]);
		}
	}

	public function postWatch(Home $home)
	{
		//Watch home
		if(Auth::check()) Auth::user()->toggleWatchHome($home->id);

		return redirect()->route('home', array('home' => $home->id));
	}

	public function getMessage(Home $home)
	{
		//Contact seller
		

		return redirect()->route('home', array('home' => $home->id));
	}

}