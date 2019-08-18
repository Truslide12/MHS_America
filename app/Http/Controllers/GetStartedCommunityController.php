<?php namespace App\Http\Controllers;

use Log;
use Auth;
use Input;
use Request;
use Validator;
use Hash;
use Config;
use Geocoder;
use App\User;
use App\Models\State;
use App\Models\Geoname;
use App\Models\Profile;
use App\Models\Company;
use App\Models\StorePaymentSources;
use App\Models\StoreTransaction;
use App\Models\StorePurchase;
use App\Models\Subscription;
use Phaza\LaravelPostgis\Geometries\Point;

/*{
use Stripe\Customer
use Stripe\Charge
use Illuminate\Support\MessageBag
}*/

class GetStartedCommunityController extends Pony {

	public $PRODUCT_ID = 1;
	public $PRODUCT_ROUTE = "getstarted-community";
	public $PRODUCT_VIEW = "getstarted.community";

	public function getIndex(Company $company, State $states)
	{
		/* debug lines */
		//self::clearSession();
		//dd( session("order_data"), session()->all() );
		/**************************/

		if( session("product") != $this->PRODUCT_ID && session("product") != 0 ) { self::clearSession(); }
		//session()->forget("active_step");
		$title = "Whoa, lets get to know each other first!"; //Pick something, Kage
		$has_account = $is_upgraded = $has_companies = FALSE;
		$states = State::orderBy('id', 'asc')->get();
		$user = Auth::user();

		if ( $user === null ) {
			//User is not logged in..
			//Give them a chance to login or register
			return view($this->PRODUCT_VIEW.".notloggedin")->with('title', $title)
												->with('redirect', $this->PRODUCT_ROUTE)
												->with('has_account', FALSE)
												->with('is_upgraded', FALSE)
												->with('has_companies', FALSE)
												->with('user', $user)
												->with('step_id', 1)
												->with('states', $states);
		} else {
			//Awesome, they are already a user, 
			//lets get some more info..
			$has_account = TRUE;
			$is_upgraded = $user->business;
			if ( count($user->companies()->pluck('companies.id')->all()) > 0 ) {
				//$user->companies()->pluck('companies.id', 'companies.title');
				$has_companies = TRUE;
			}
			
			//First, we're going to check for a claim id..
			//this way we can handle easy to create claim links
			if ( Request::exists('claimid') ) {
				$claim = "on";
			} else {
				$claim = "off";
			}
		}
		
		//here is where logic starts
		if ( $has_account && $is_upgraded && $has_companies) {
			$title = "Promote Your Community";
			$step = session('active_step');
			if ( empty($step) ) { $step = 2; }
			//the magick...ssss so tired
			switch ( $step ) {
				case 2:
				  $title = "Order Form";
				  $view = $this->PRODUCT_VIEW.".orderform";
				break;
				case 3:
				  $title = "Are you sure about this?";
				  $view = $this->PRODUCT_VIEW.".confirmation";
				break;
				case 4:
				  $title = "Show Me the Money!";
				  $view = $this->PRODUCT_VIEW.".payment";
				break;
				case 5:
				  $title = "Success";
				  $view = $this->PRODUCT_VIEW.".success";
				break;
				default:
				  $title = "Something Went Wrong..";
				  $view = $this->PRODUCT_VIEW.".home";
				break;
			}


			return view($view)
					->with('user', $user)
					->with('companies', Auth::user()->companies)
					->with('title', $title)
					->with('states', $states)
					->with('step_id', $step);
		





		} else {
			//return $user->companies()->pluck('companies.id', 'companies.title');
			return view($this->PRODUCT_VIEW.".notloggedin")->with('title', $title)
												->with('redirect', $this->PRODUCT_ROUTE)
												->with('has_account', $has_account)
												->with('is_upgraded', $is_upgraded)
												->with('has_companies', $has_companies)
												->with('user', $user)
												->with('step_id', 1)
												->with('states', $states);
		}
	}

	public function postUserForm()
	{
		$user = Auth::user();
		$states = State::orderBy('id', 'asc')->get();
		$messageBag = new \Illuminate\Support\MessageBag(); //$messageBag->add('error', 'Username not filled in');
		$has_account = $is_upgraded = $has_companies = FALSE;

		if( $user === null ) {

			//not logged in, so lets create an account..
			$created = self::postRegister();
			
			if ( $created['status'] ) {
				$has_account = TRUE;
				//upgrade an account..
				$upgraded = self::postActivate();
				if ( $upgraded['status'] ) {
					return view($this->PRODUCT_VIEW.'.home');//->with('user', $created['user']);
				} else {
					$errors = $upgraded['errors'];
				}
				
			} else {
				$errors = $created['errors'];
			}

			return view($this->PRODUCT_VIEW.".notloggedin")->with('title', "Form Incomplete!")
												->with('redirect', $this->PRODUCT_ROUTE)
												->with('states', $states)
												->with('has_account', $has_account)
												->with('is_upgraded', $is_upgraded)
												->with('has_companies', $has_companies)
												->withErrors($errors)
												->withInput(Request::except('password', 'password_confirmation'));

		} else {

			$has_account = TRUE;
			$is_upgraded = $user->business;

			if ( ! $is_upgraded ) {
				//upgrade an account..
				$upgraded = self::postActivate();
				if ( $upgraded['status'] ) {

					$companies = self::postCompanyProcess();
					if ( $companies['status'] ) {
						
						return view($this->PRODUCT_VIEW.'.home');//->with('user', $created['user']);

					} else {
						$errors = $companies['errors'];
					}

				} else {
					$errors = $upgraded['errors'];
				}
			} else {
				$companies = self::postCompanyProcess();
				if ( $companies['status'] ) {
					self::getIndex();
					return;
				} else {
					$errors = $companies['errors'];
				}
			}

			return view($this->PRODUCT_VIEW.".notloggedin")->with('title', "Form Incomplete!")
												->with('redirect', $this->PRODUCT_ROUTE)
												->with('states', $states)
												->with('has_account', $has_account)
												->with('is_upgraded', $is_upgraded)
												->with('has_companies', $has_companies)
												->withErrors($errors)
												->withInput(Request::except('password', 'password_confirmation'));
		}

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

		if($validator->fails()) {
			return Array("status" => false, "errors" => $validator);
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
			//User was created..
			Auth::loginUsingId($user->id);
			return Array("status" => true, "user" => $user);

		}else{
			//User not created..
			// Get validation errors (see Ardent package)
			$error = $user->errors()->all(':message');

			return Array("status" => false, "errors" => $error);
		}
	}

	public function postActivate()
	{
		$validator = Validator::make(Input::all(),
			array(
				'personal-firstname' => 'required|between:2,48',
				'personal-lastname' => 'required|between:2,48',
				'personal-address-1' => 'required|between:6,64',
				'personal-address-2' => 'max:48',
				'personal-zip' => 'required|regex:/^[0-9]{5}(\-[0-9]{4})?$/',
				'personal-city' => 'required|between:3,48',
				'personal-state' => 'required|exists:states,id',
				'personal-phone' => 'required',
			)
		);

		if($validator->fails()) {

			return Array("status" => false, "errors" => $validator);

		}else{

			$user = Auth::user();
			$user->first_name = Input::get('personal-firstname');
			$user->last_name = Input::get('personal-lastname');
			$user->address = Input::get('personal-address-1');
			if(Input::has('personal-address-2')) $user->addressb = Input::get('personal-address-2');
			$user->city = Input::get('personal-city');
			$user->state = Input::get('personal-state');
			$user->phone = preg_replace('/\D+/', '', Input::get('personal-phone'));
			$user->business = 1;

			if( $user->save() ) {
				return Array("status" => true, "user" => $user);
			} else {
				return Array("status" => false, "errors" => $validator);
			}

		}

	}

	public function postCompanyProcess() {
		//determine what process to use..
		$mymode = Input::get('inlineRadioOptions');
		switch ( $mymode ) {
			case 0:
				//Create a Personal Business Account
				$company_created = self::postCompanyCreate(TRUE, TRUE, TRUE);
				return $company_created;
			break;
			case 1:
				//Create a Company
				//self::postCompanyCreate();
				//self::postCompanyClaim();
				$company_created = self::postCompanyCreate(FALSE, FALSE, TRUE);
				return $company_created;
			break;
			case 2:
				//Join a Company
				//Does the company exists?
				if ( Input::get('join_id') == NULL ) {

					//first create the company..
					$skeleton_company_created = self::postCompanyCreate(FALSE, FALSE, FALSE);

					//next the personal business account
					$company_created = self::postCompanyCreate(TRUE, TRUE, TRUE);
					return $company_created;

				} else {

					$company_joined = self::postCompanyJoin();
					return $company_joined;
				}

				//Does the user want to claim?
				//--yes: create
				//--no: personal account..
				$company_created = self::postCompanyCreate(TRUE, TRUE);
				return $company_created;
			break;
		}


		//if only claim_id is present.. perform claim & join

		//if only join_id present.. perform join

		//if both are present.. perform claim & join

		//if neither is present.. perform create & claim & join
		
	}
	public function postCompanyJoin() {
		$validator = Validator::make(Input::all(),
			array(
				'code' => 'required|size:15|alpha_num'
			)
		);

		if($validator->fails()) {
			return Array("status" => false, "errors" => $validator);

		}else{
			$invite = CompanyInvite::byCode(Input::get('invite-code'))->where('email', Auth::user()->email)->first();
			
			if(!is_a($invite, 'Eloquent')) {
				$messageBag = new \Illuminate\Support\MessageBag(array('error' => 'Could not validate the code. The most common cause is that the email on your MHS account and the email which we sent the code to do not match. If this is the case, change the email in your personal settings or ask the company to resend to the correct email address.'));
				return Array("status" => false, "errors" => $messageBag );
			}

			$me = Auth::user();

			$me->attachToCompany($invite->company_id, $invite->role_id);

			return Array("status" => true, "company_id" => $invite->company_id);
		}
	}

	public function postCompanyClaim() {
		//
	}

	public function postCompanyCreate($is_personal = false, $is_private = false, $is_claiming = true)
	{
		$validator = Validator::make(Input::all(),
			array(
				'business-name' => 'required|between:4,64',
				'business-phone' => 'required|phone:US',
				'business-fax' => 'phone:US',
				'business-address-1' => 'required|between:5,48',
				'business-address-2' => 'between:5,48',
				'business-state' => 'required|exists:states,id',
				'business-city' => 'required|exists:places,id,state_id,'.intval(Input::get('business-state', 0)),
				'business-zip' => 'required|regex:/^[0-9]{5}(\-[0-9]{4})?$/',
			)
		);

		if($validator->fails()) {
			return Array("status" => false, "errors" => $validator);

		}else{
			
			$city = Geoname::where('state_id' ,Input::get('business-state'))->where('id', Input::get('business-city'))->first();

			if(!is_a($city, Eloquent::class)) {
				/* Nuuuuuuuu! D: */
				$messageBag = new \Illuminate\Support\MessageBag();
				$messageBag->add('error', 'uh-oh. Something happened in transit. Please try again. Contact technical support if this persists. (ERROR: CityLookupFailed)');
				return Array("status" => false, "errors" => $messageBag );
			}

			$sec_key = str_random(32);
			$sec_hash = bcrypt($sec_key);

			$company = new Company;
				
			$company->title = Input::get('business-name');
			//$company->name = strtolower(str_replace(' ', '', Input::get('name')));
			$company->name = str_slug(Input::get('business-name'));
			$company->street_addr = Input::get('business-address-1');
			$company->street_addr2 = Input::get('business-address-2');
			$company->phone = Input::get('business-phone');
			$company->fax = Input::get('business-fax');
			$company->state_id = Input::get('business-state');
			$company->city_id = $city->id;
			$company->verified = 0;
			$company->sec_hash = $sec_hash;
			$company->about_us = '';
			$company->mission = '';
			$company->zip_code = Input::get('business-zip_code');
			$company->is_personal = $is_personal;
			$company->is_private = $is_private;

			if(!$company->save()) {
				/* Nuuuuuuuu! D: */
				$messageBag = new \Illuminate\Support\MessageBag();
				$messageBag->add('error', 'uh-oh. Something happened in transit. Please try again. Contact technical support if this persists. (ERROR: CompanyCreationError)');
				return Array("status" => false, "errors" => $messageBag);
			}else{
				/* SUCCESS! :3 */
				
				//Now, attach the user to the company as administrator
				if ( $is_claiming ) {
				  if(!Auth::user()->attachToCompany($company->id, 'admin')) {
					//And return a fail if fail
					$messageBag = new \Illuminate\Support\MessageBag();
					$messageBag->add('error', 'uh-oh. Something happened in transit. Please mark down this information, and contact technical support. (ERROR: CompanyRoleError, Company ID: '.$company->id.', User ID: '.Auth::user()->id.')');
					return Array("status" => false, "errors" => $messageBag);
				  }
				}

				return Array("status" => true, "company" => $company);
			}
		}
	}



	/*************************************
	** Step 2
	**
	**
	**************************************/



	public function postCheckGeo()
	{
		$validator = Validator::make(Request::all(),
			array(
				'company-id' => 'required|exists:companies,id',
				'community-name' => 'required|between:5,32',
				'community-address1' => 'required',
				'community-address2' => '',
				'community-state' => 'required|exists:states,id',
				'community-city' => 'required|exists:places,id,state_id,'.intval(Input::get('community-state', 0)),
				'community-zip' => 'required|regex:/^[0-9]{5}(\-[0-9]{4})?$/',
				'community-type' => 'required|between:0,2',
			)
		);

		if($validator->fails()) {
			return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors($validator);
		}

		/** 
		 * Geocoding helper
		 * see App\Models\Support\Geocoder
		 **/
		$geocode = Geocoder::address(
			Input::get('community-address1'), 
			Input::get('community-address2', ''), 
			Input::get('community-city'), 
			Input::get('community-state'), 
			Input::get('community-zip', '')
		);

		if(!$geocode['success']) {
			return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors(["Address lookup failed. Try again later or contact support if this persists."]);
		}

		
		//check if this address is taken??
		$addr_available = false;
		$addr_available = Profile::where('address', $geocode['data']['address'])
									->where('zipcode', $geocode['data']['zipcode'])
									->where('state_id', $geocode['data']['state_id'])
									->where('city_id', $geocode['data']['city_id'])->first();
		if(!$addr_available) {
			//return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors(["pass", Input::all()]);

			$orderdata = Input::except('_token');
			$orderdata['community-address1'] = $geocode['data']['address'];

			if ( array_key_exists('addressb', $geocode['data']) ) {
				$orderdata['community-address2'] = $geocode['data']['addressb'];
			} else {
				$orderdata['community-address2'] = "";
			}
			$orderdata['community-zip'] = $geocode['data']['zipcode'];
			$orderdata['community-city'] = $geocode['data']['city_id'];
			$orderdata['community-state'] = $geocode['data']['state_id'];
			$orderdata['community-county'] = $geocode['data']['county_id'];
			$orderdata['community-location'] = $geocode['data']['location'];
			$orderdata['city_data'] = $geocode['city_data'];
			$orderdata['state_data'] = $geocode['state_data'];
			$orderdata['company_data'] = null;
			$orderdata['community-type'] 	= Input::get('community-type');

			foreach ( Auth::user()->companies as $company ) {
				if ( $company->id == Input::get('company-id') ) {
					$orderdata['company_data'] = $company;
				}
			}
			
			if ( $orderdata['company_data'] == null ) { return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors(["Failed to set business account.."]); }

			session(['order_data' => $orderdata, 'active_step' => 3]);

			return redirect()->route($this->PRODUCT_ROUTE);
		}else{
			return redirect()->route($this->PRODUCT_ROUTE)->withInput(Input::all())->withErrors(['There seems to already be a park in this location']);
		}

		

	}


	/*************************************
	** Step 3
	**
	**
	**************************************/
	public function postOrderConfirmation()
	{
		if ( session('plan') == "free" ) {
			$validator = Validator::make(Request::all(),
				array(
					'auth-to-promote' => 'required',
					'agree-to-terms' => 'required',
				)
			);	
		} else {
			$validator = Validator::make(Request::all(),
				array(
					'auth-to-promote' => 'required',
					'agree-to-terms' => 'required',
					'agree-to-autorenew' => 'required',
				)
			);	
		}


		if($validator->fails()) {
			return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors($validator);
		}


		if ( session('is_upgrade') === true ) {
			$profile = Profile::where('id', session("profile_id"))->first();
			foreach ( Auth::user()->companies as $company ) {
				if ( $company->id == $profile->company_id ) {
					$order_data = session("order_data");
					$order_data['profile_data'] = $profile;
					session(["order_data" => $order_data, "active_step" => 4]);
				}
			}
			//return session('active_step') . "|" . $profile->id;;
			return redirect()->route($this->PRODUCT_ROUTE);
		}

			//Create free profile
			$d = session("order_data");
			$pd = (object)[
			'title' 	=> $d['community-name'],
			'phone' 	=> null,
			'fax' 		=> null,
			'address' 	=> $d['community-address1'],
			'addressb' 	=> $d['community-address2'],
			'zipcode' 	=> $d['community-zip'],
			'state_id' 	=> $d['state_data']['id'],
			'county_id' => $d['community-county'],
			'city_id' 	=> $d['city_data']['id'],
			'location'	=> $d['community-location'],
			'age_type' => $d['community-type'] 
			];

			$test = self::createBaseProfile($d['company_data']['id'], $pd);
			if ( $test->status ) {
				$order_data = session("order_data");
				$order_data['profile_data'] = $test->profile;
				session(["order_data" => $order_data]);
			}

		if ( session('plan') == "free" ) {
			$price = 0;
		} else {
			$price = 149.99;
		}

		if ( $price == 0 ) {
			//go to success screen
			session(['active_step' => 5]);
		} else {
			//go to payment screen
			session(['active_step' => 4]);
		}

		return redirect()->route($this->PRODUCT_ROUTE);

	}


	/*************************************
	** Step 4
	**
	**
	**************************************/

	public function postSubmitPaymentProcess($comp) {
		
			$product_id = 1;
			//User is using a card on file..
			$chsource = $comp->paysources->where('id', (int)Request::get('payment_source'))->first();
			
			$subdata =[
			'product_id' => $product_id,
			'profile_id' => session("order_data")['profile_data']->id,
			'profile_name' => session("order_data")['profile_data']->title,
			'company_id' => $comp->id,
			'payment_source_id' => Request::get('payment_source')
			];

			$receipt = self::purchaseProfileSubscription($subdata);

			if ( $receipt->status ) {
				session(['active_step' => 5]);
				$order_data = session("order_data");
				$order_data['transaction_data'] = $receipt->transaction;
				session(["order_data" => $order_data]);
				return redirect()->route($this->PRODUCT_ROUTE);
			} else {
				return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors($receipt->errors);
			}
	}

	public function postSubmitPaymentAddSource($comp) {

			//user wants to create a new source..

			//first check for token..
			$validator = Validator::make(Request::all(),
				array('stripeToken' => 'required'),
				array('stripeToken.required' => 'You must enter a payment source')
			);

			if($validator->fails()) {
				return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors($validator);
			}

			$att = [
				'company_id' => $comp->id,
				'source_token' => Request::get('stripeToken'),
				'nickname' => Request::get('source-name')
			];


			if ( $comp->stripe_customer_id == null ) {

				$validator = Validator::make(Request::all(),
					array('billing-email' => 'required'),
					array('billing-email.required' => 'You must enter a billing email')
				);

				if($validator->fails()) {
					return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors($validator);
				}

				//check if there is already a company using this email...

				$att['billing-email'] = Request::get('billing-email');

			} else {

				//add the source from token to stripe customer...
				$att['stripe_customer_id'] = $comp->stripe_customer_id;

			}

			$att = self::addCardToCompany($att);
			return redirect()->route($this->PRODUCT_ROUTE);
	}

	public function postSubmitPayment()
	{
		$product_id = 1;
		$user = Auth::user();
		$company = $user->companies->where('id', session('order_data')['company_data']['id'])->first();

		if ( Request::get('payment_source') != 0 ) {
			return self::postSubmitPaymentProcess($company);
		} else {
			return self::postSubmitPaymentAddSource($company);
		}

	}


	public function postCharge() {
		//
	}


	public function getFree()
	{
		self::clearSession(true);
		session(["product" => 0, "plan" => "free"]);
		return redirect()->route($this->PRODUCT_ROUTE);
	}

	public function getPremium()
	{
		self::clearSession(true);
		session(["product" => 1]);
		session(["plan" => "premium"]);
		return redirect()->route($this->PRODUCT_ROUTE);
	}


	public function getUpgrade()
	{
		self::clearSession(true);

		$pid = Request::input('profile');
		if ( $pid ) {

			$profile = Profile::where('id', $pid)->first();
			$orderdata['company_data'] = null;
			foreach ( Auth::user()->companies as $company ) {
				if ( $company->id == $profile->company_id ) {
					$orderdata['company_data'] = $company;
				}
			}
			if ( $orderdata['company_data'] == null ) { return redirect()->route($this->PRODUCT_ROUTE)->withInput()->withErrors(["Failed to set business account.."]); }

			$orderdata['community-name'] =$profile->title;
			$orderdata['community-address1'] =$profile->address;
			$orderdata['community-address2'] = $profile->addressb;
			$orderdata['community-zip'] = $profile->zipcode;
			$orderdata['community-city'] = $profile->city_id;
			$orderdata['community-state'] = $profile->state_id;
			$orderdata['community-county'] = $profile->county_id;
			$orderdata['community-location'] = $profile->location;
			$orderdata['city_data'] = Geoname::where('state_id', $profile->state_id)
												->where('id', $profile->city_id)->first();

			$orderdata['state_data'] = State::where('id', $profile->state_id)->first();

			session(["product" => 1, "plan" => "premium", "order_data" => $orderdata, "active_step" => 3, "is_upgrade" => true, "profile_id" => $profile->id ]);
			return redirect()->route($this->PRODUCT_ROUTE);
		} else {
			//
		}
	}

	public function clearSession($no_redir = false)
	{
		session()->forget("order_data");
		session()->forget("active_step");
		session()->forget("plan");
		session()->forget("product");
		session()->forget("profile_id");
		session()->forget("is_upgrade");

		//session()->flush(); /* this shit logs people out..*/

		if ( $no_redir == true ) { return; } else {
		  return redirect()->route('page', ['slug' => 'community-plans']);
		}
	}













	/******************************
	** Support Functions..
	**
	**
	**
	*******************************/

	protected function addCardToCompany($params) {
		$target_company = Company::where('id', $params['company_id'])->first();

		if( $target_company->stripe_customer_id == null ) {
			//create new stripe customer (with the source)..
			if ( !array_key_exists('billing-email', $params) || !array_key_exists('source_token', $params) ) { return false; }
			$scustomer = \Stripe\Customer::create([
				"email" => $params['billing-email'],
				"source" => $params['source_token'],
				"metadata" => [
				  "CompanyID" => $target_company->id,
				  "CompanyName" => $target_company->title,
				  "IsPersonalAccount" => $target_company->is_personal,
				]
			]);

			//store business email in companies
			$target_company->stripe_customer_email = $scustomer->email;
			//store customer id (cus_) in 
			$target_company->stripe_customer_id = $scustomer->id;
			$target_company->save();
			$customer 	= \Stripe\Customer::retrieve($target_company->stripe_customer_id);
			$card 		= $customer->sources->retrieve($scustomer->default_source);
		} else {
			//add card to stripe customer..
			$customer 	= \Stripe\Customer::retrieve($target_company->stripe_customer_id);
			$card 		= $customer->sources->create(["source" => $params['source_token']]);
		}
		


		$newsource = new StorePaymentSources;
		$newsource->company_id 		= (int)$customer->metadata->CompanyID;
		$newsource->stripe_card_id 	= $card->id;
		$newsource->card_brand 		= $card->brand;
		$newsource->card_last_four 	= $card->last4;
		$newsource->card_nickname 	= $params['nickname'];
		$newsource->save();


		$card->metadata = [
				'Nickname' => $params['nickname'],
				'CardId' => $newsource->id
		];
		$card->save();

		return (object)["card"=>$card,"customer"=>$customer];
	}

	protected function purchaseItem() {
			$charge = \Stripe\Charge::create([
			  'amount' => 14999,
			  'currency' => 'usd',
			  'customer' => $comp->stripe_customer_id,
			  'source' => $chsource->stripe_card_id,
			]);

			return $charge;
	}

	protected function purchaseProfileSubscription($params)
	{
		$plan_id = "mhs_comm_annual";

		$user = Auth::user();
		$company = $user->companies->where('id', $params['company_id'])->first();

		$params['profile_id'];
		$check_sub = Subscription::where('subscription_target', $params['profile_id'])->where('stripe_plan_id', $plan_id)->exists();
		if ( $check_sub ) {
			return (object)[
			  "status" => false,
			  "errors" => ["This profile already has a subscription."]
			];
		}

		if ( array_key_exists('source_token', $params) ) {
			//we passed a source.. so we use that..
			$stripe_call = \Stripe\Subscription::create([
						  "customer" => $company->stripe_customer_id,
						  "source" => $params['source_token'],
						  "default_source" => $params['source_token'],
						  "items" => [
						    [
						      "plan" => $plan_id,
						    ]
						  ],
						  "metadata" => [
				  				"ProfileID" => $params['profile_id'],
				  				"ProfileName" => $company->title,
				  		  ]
						]);
			$scustomer = \Stripe\Customer::retrieve($company->stripe_customer_id);
			$newsource = new StorePaymentSources;
		    $newsource->company_id = $params['company_id'];
		    $newsource->stripe_card_id = $scustomer->sources->data[0]->id;
		    $newsource->card_brand = $scustomer->sources->data[0]->brand;
		    $newsource->card_last_four = $scustomer->sources->data[0]->last4;
		    $newsource->card_nickname = Request::get("source-name");
		    $newsource->save();
		    $stripe_card_id = $newsource->id;

		} else if ( array_key_exists('payment_source_id', $params) ) {
			//we passed a particular card we want to use..
			$c = StorePaymentSources::where('id', $params['payment_source_id'])->first();
			
			$scustomer = \Stripe\Customer::retrieve($company->stripe_customer_id);
			$scustomer->default_source = $c->stripe_card_id;
			$scustomer->save();

			$stripe_call = \Stripe\Subscription::create([
						  "customer" => $company->stripe_customer_id,
						  "items" => [
						    [
						      "plan" => $plan_id,
						    ],
						  ],
						  "metadata" => [
				  				"ProfileID" => $params['profile_id'],
				  				"ProfileName" => $company->title,
				  		  ]
						]);
			$stripe_card_id = $company->paysources->where('id', $params['payment_source_id'])->first();
		} else {
			//just charge default..
			$stripe_call = \Stripe\Subscription::create([
						  "customer" => $company->stripe_customer_id,
						  "items" => [
						    [
						      "plan" => $plan_id,
						    ],
						  ],
						  "metadata" => [
				  				"ProfileID" => $params['profile_id'],
				  				"ProfileName" => $company->title,
				  		  ]
						]);
			return $stripe_call;
			//$stripe_card_id = \Stripe\Customer::retrieve($company->stripe_customer_id)->sources->data;
		}




		//Verify stripe response is good



		//Save this subscription
		$subscription = new Subscription;
		$subscription->company_id 				= $company->id;
		$subscription->payment_source_id 		= $c->id;
		$subscription->stripe_subscription_id 	= $stripe_call->id;
		$subscription->stripe_plan_id 			= $stripe_call->plan->id;
		$subscription->subscription_target 		= $params['profile_id'];
		$subscription->ends_at 					= date(DATE_ATOM, $stripe_call->current_period_end);
		$subscription->auto_renew 				= true;
		$subscription->save();

		$profile = Profile::where('id', $params['profile_id'])->first();
		$profile->subscription_id = $subscription->id;
		$profile->save();

		$item = (object)[
			'product_id' => $params['product_id'],
			'subscription_id' => $subscription->id,
			'product_target' => $params['profile_id'],
			'purchase_price' => 14999
		];
		$payment = (object)[
			'company_id' => $company->id,
			'user_id' => $user->id,
			'payment_source_id' => $c->id,
			'stripe_charge_id' => null,
			'stripe_invoice_id' => $stripe_call->latest_invoice,
			'amount' => (is_null($stripe_call->plan->amount) ? $stripe_call->plan->tiers[0]->unit_amount : $stripe_call->plan->amount) * $stripe_call->quantity	
		];

		return (object)[
			"status" => true,
			"transaction" => self::createTransaction([$item], $payment)
		];
	}

	protected function createTransaction($items, $payment)
	{

		//change to save to business intead of user:
		$transaction = new StoreTransaction;
		$transaction->company_id 			= $payment->company_id;
		$transaction->user_id 				= $payment->user_id;
		$transaction->payment_source_id 	= $payment->payment_source_id;
		$transaction->transaction_code 		= uniqid();
		$transaction->stripe_charge_id 		= $payment->stripe_charge_id;
		$transaction->stripe_invoice_id 	= $payment->stripe_invoice_id;
		$transaction->transaction_total 	= $payment->amount;
		$transaction->save();

		foreach($items as $item){
			self::createPurchase($item, $transaction->id);
		}

		return $transaction;

	}

	protected function createPurchase($item, $transaction_code)
	{
		//change to save to business intead of user:
		$purchase = new StorePurchase;
		$purchase->transaction_id 	= $transaction_code;
		$purchase->product_id 		= $item->product_id;
		$purchase->subscription_id 	= $item->subscription_id;
		$purchase->product_target 	= $item->product_target;
		$purchase->purchase_price 	= $item->purchase_price;
		$purchase->save();

	}






	public function createBaseProfile($company_id, $data)
	{
		$profile = new Profile;
		$profile->title 		= $data->title;
		$profile->type 			= 'Community';
		$profile->phone 		= $data->phone;
		$profile->fax 			= $data->fax;
		$profile->address 		= $data->address;
		$profile->zipcode 		= $data->zipcode;
		$profile->state_id 		= $data->state_id;
		$profile->county_id 	= $data->county_id;
		$profile->city_id 		= $data->city_id;
		$profile->company_id 	= $company_id;
		$profile->age_type 		= $data->age_type;

		if (!$profile->save()) {

			return Redirect::route($this->PRODUCT_ROUTE)->withErrors(["Failed to create profile.."]);
		}

		$geocode = Geocoder::address(
			$data->address,
			'',
			$data->city_id,
			$data->state_id,
			$data->zipcode,
			$profile
		);
		$geocoding = $geocode['success'];

		if($geocoding) {
			$profile->update($geocode['data']);
		}

		return (object)[
			"status" => $geocoding,
			"profile" => $profile
		];
	}





}