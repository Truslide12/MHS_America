<?php namespace App\Http\Controllers;

use Auth;
use Input;
use Validator;
use Redirect;
use Request;
use Response;
use Session;
use Mail;
use App\User;
use App\Models\Banner;
use App\Models\Campaign;
use App\Models\Canvas;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyInvite;
use App\Models\Geoname;
use App\Models\Profile;
use App\Models\Permission;
use App\Models\Subscription;
use App\Models\State;
use App\Models\StoreTransaction;
use App\Models\StorePaymentSources;
use App\Models\Role;
use App\Models\ProfileUser;
use App\Models\HomeUser;
use App\Models\CompanyUser;

use App\Mail\CompanyInviteSent;

class BusinessController extends Pony {

	protected function jsonAPI($data, $http_status = 200, $json_type = null)
	{
		$json_opts = (Input::get('format', '') == 'pretty') ? JSON_PRETTY_PRINT : 0;
		$output_array = ['success' => true, 'data' => $data];
		return Response::json($output_array, $http_status, [], $json_opts)->withHeaders(['Content-Type' => 'application/vnd.api+json']);
	}

	public function getIndex(Company $company)
	{
		$me = Auth::user();
		/* $companies = $me->companies()->pluck('companies.id')->toArray();
		if ( count($companies) == 1 ) {
			return redirect()->route('account-business-company', [ 'id' => $companies[0] ]);

		} */
		
		if( $me->companies->count() == 1 ) {
			$comp = $me->companies()->first();
			return redirect()->route('account-business-company', array('company' =>  $comp->id ));
		}

		return view('account.business.dashboard')
					->with('companies', Auth::user()->companies)
					->with('canvas', Canvas::getDefault());
	}

	public function getGuide()
	{
		return view('account.business.guide')
					->with('canvas', Canvas::getDefault());
	}

	public function getActivate()
	{
		return view('account.business.activate')
					->with('canvas', Canvas::getDefault());
	}

	public function getCompanyCreate()
	{
		return view('account.business.company.create')
					->with('canvas', Canvas::getDefault());
	}

	public function postCompanyCreate()
	{
		$validator = Validator::make(Input::all(),
			array(
				'company_name' => 'required|between:4,64',
				'phone' => 'required|phone:US',
				'fax' => 'phone:US|nullable',
				'address' => 'required|between:5,48',
				'state' => 'required|exists:states,id',
				'city' => 'required|exists:places,id,state_id,'.intval(Input::get('state', 0)),
			),
			array(
				'company_name.required' => 'A name is required for the company.',
				'phone.required' => 'A phone number is required for the company.',
				'phone.phone' => 'The phone number doesn\'t appear to be valid.',
				'fax.phone' => 'The fax number doesn\'t appear to be valid.',
				'address.required' => 'The street address is required for the company.',
				'address.between' => 'The street address should be between 5 and 48 characters.',

				'state.required' => 'The state is required for the company.',
				'state.exists' => 'That doesn\'t appear to be a state. How strange. 0_o<br>Please contact technical support (or y\'know, stop hacking)',
				'city.required' => 'The city is required for the company.',
				'city.exists' => 'That doesn\'t appear to be a city. How strange. 0_o<br>Please contact technical support (or y\'know, stop hacking)'
			)
		);

		if($validator->fails()) {
			return redirect()->route('account-business-company-create')
							->withInput(Input::only('name', 'phone', 'fax', 'address', 'state', 'city'))
							->withErrors($validator);
		}else{
			
			$city = Geoname::where('state_id' ,Input::get('state'))->where('id', Input::get('city'))->first();

			if(!is_a($city, Geoname::class)) {
				/* Nuuuuuuuu! D: */
				$messageBag = new \Illuminate\Support\MessageBag();
				$messageBag->add('error', 'uh-oh. Something happened in transit. Please try again. Contact technical support if this persists. (ERROR: CityLookupFailed)');
				return redirect()->route('account-business-company-create')
							->withErrors($messageBag);
			}

			$sec_key = str_random(32);
			$sec_hash = bcrypt($sec_key);

			$company = new Company;
				
			$company->title = Input::get('company_name');
			//$company->name = strtolower(str_replace(' ', '', Input::get('name')));
			$company->name = str_slug(Input::get('company_name'));
			$company->street_addr = Input::get('address');
			$company->phone = Input::get('phone');
			$company->fax = Input::get('fax') ?? '';
			$company->state_id = Input::get('state');
			$company->city_id = $city->id;
			$company->verified = 0;
			$company->sec_hash = $sec_hash;
			$company->about_us = '';
			$company->mission = '';
			$company->claimed = true;
			
			if(!$company->save()) {
				/* Nuuuuuuuu! D: */
				$messageBag = new \Illuminate\Support\MessageBag();
				$messageBag->add('error', 'uh-oh. Something happened in transit. Please try again. Contact technical support if this persists. (ERROR: CompanyCreationError)');
				return redirect()->route('account-business-company-create')
							->withErrors($messageBag);
			}else{
				/* SUCCESS! :3 */
				
				//Now, attach the user to the company as administrator
				if(!Auth::user()->attachToCompany($company->id, 'admin')) {
					//And return a fail if fail
					$messageBag = new \Illuminate\Support\MessageBag();
					$messageBag->add('error', 'uh-oh. Something happened in transit. Please mark down this information, and contact technical support. (ERROR: CompanyRoleError, Company ID: '.$company->id.', User ID: '.Auth::user()->id.')');
					return redirect()->route('account-business-company-create')
								->withErrors($messageBag);
				}

				return redirect()->route('account-business-company', array('company' => $company->id))
								->with('success', 'Company successfully created! A representative will verify it manually within 24 hours. In case we wish to contact you, please ensure your phone number is valid. While waiting on verification, you can continue setting everything up.');
			}
		}
	}

	public function getCompanyLink()
	{
		return view('account.business.company.link')
					->with('canvas', Canvas::getDefault());
	}

	public function getCompanyLinkActivate($invite_code)
	{
		$validator = Validator::make(['code' => $invite_code],
			array(
				'code' => 'required|between:15,16|alpha_num'
			)
		);

		if($validator->fails()) {
			return redirect()->route('account-business-company-link')
							->withErrors($validator);
		}else{
			$invite = CompanyInvite::byCode($invite_code)->where('email', 'ILIKE', Auth::user()->email)->first();
			
			if(!is_a($invite, CompanyInvite::class)) {
				$messageBag = new \Illuminate\Support\MessageBag(array('error' => 'Could not validate the code. The most common cause is that the email on your MHS account and the email which we sent the code to do not match. If this is the case, change the email in your personal settings or ask the company to resend to the correct email address.'));
				return redirect()->route('account-business-company-link')
							->withErrors($messageBag);
			}

			$me = Auth::user();

			$me->attachToCompany($invite->company_id, $invite->role_id);

			return redirect()->route('account-business')
							->with('success', 'You have successfully linked to '.$invite->company->title.'.');
		}
	}

	public function postCompanyLink()
	{
		$validator = Validator::make(Input::all(),
			array(
				'code' => 'required|between:15,16|alpha_num'
			)
		);

		if($validator->fails()) {
			return redirect()->route('account-business-company-link')
							->withErrors($validator);
		}else{
			$invite = CompanyInvite::byCode(Input::get('code'))->where('email', 'ILIKE', Auth::user()->email)->first();
			
			if(!is_a($invite, CompanyInvite::class)) {
				$messageBag = new \Illuminate\Support\MessageBag(array('error' => 'Could not validate the code. The most common cause is that the email on your MHS account and the email which we sent the code to do not match. If this is the case, change the email in your personal settings or ask the company to resend to the correct email address.'));
				return redirect()->route('account-business-company-link')
							->withErrors($messageBag);
			}

			$me = Auth::user();

			$me->attachToCompany($invite->company_id, $invite->role_id);

			return redirect()->route('account-business')
							->with('success', 'You have successfully linked to '.$invite->company->title.'.');
		}
	}

	public function getCompany(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		if($me->hasRoleForCompany('admin', $company)) {
			$profiles = $company->profiles;
		}else{
			$profiles = $me->profiles($company->id)->get();
		}

		$filtered_homes = [];
		foreach ( $company->homes as $home ) {
			if( Auth::user()->hasHomeAccess($home->id) ) {
				$filtered_homes[] = $home;
			}
		}

		return view('account.business.company')
					->with('canvas', Canvas::getDefault())
					->with('profiles', $profiles)
					->with('profile_count', $profiles->count())
					->with('company', $company)
					->with('homes', $filtered_homes)
					->with('hide_sign_out', true)
					->with('news', $company->newsitems()->orderBy('id', 'desc')->paginate(5));
	}

	public function getCompanyUsers(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		$role = $me->roleForCompany($company);

		//Can I edit users?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_users', $company->id)) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.users')
					->with('canvas', Canvas::getDefault())
					->with('company', $company)
					->with('role', $role);
	}

	public function getCompanyUserCreate(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		$role = $me->roleForCompany($company);

		//Can I edit users?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_users', $company->id)) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.useradd')
					->with('canvas', Canvas::getDefault())
					->with('company', $company)
					->with('links', $company->invites)
					->with('role', $role);

	}

	public function postCompanyUserCreate(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I edit users?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_users', $company->id)) return redirect()->route('account-business-company', array('company' => $company->id));

		$validator = Validator::make(['email' => strtolower(Input::get('email'))],
			array(
				'email' => 'required|email|unique:company_invites,email,NULL,id,company_id,'.$company->id
			),
			array(
				'email.required' => 'The email is required.',
				'email.email' => 'Not a valid email address.',
				'email.unique' => 'There is already a pending link for this email.',
			));

		if($validator->fails()) {
			return redirect()->route('account-business-company-users-create', array('company' => $company->id))
							->withErrors($validator);
		}else{
			$invite = new CompanyInvite;
			$invite->email = strtolower(Input::get('email'));
			$invite->code = createCode(15);
			$invite->company_id = $company->id;
			$invite->role_id = Role::where('name', 'editor')->first()->id;
			if($invite->save()) {

				$message = (new CompanyInviteSent($invite, $company))->onQueue('emails');
				Mail::to($invite->email)->queue($message);

				return redirect()->route('account-business-company-users-create', array('company' => $company->id))
								->with('success', 'Successfully sent an invite code to <strong>'.Input::get('email').'</strong>.');
			}

			$messageBag = new \Illuminate\Support\MessageBag(array('error' => 'Failed to store the invite code. Please contact technical support or try again later.'));
			return redirect()->route('account-business-company-users-create', array('company' => $company->id))
							->withErrors($messageBag);
		}
	}

	public function getCompanyUserEdit(Company $company, User $user)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even edit users at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_users', $company->id)) return redirect()->route('account-business-company', array('company' => $company->id));

		$cu_companies = $user->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a user not even part of the company?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		$role = $me->roleForCompany($company);

		//We're good now.
		return view('account.business.company.useredit')
					->with('canvas', Canvas::getDefault())
					->with('company', $company)
					->with('cuser', $user)
					->with('role', $role);
	}

	public function postCompanyUserEdit(Company $company, User $user)
	{

		$data = Input::all();
		$data['me'] = Auth::user();
		$data['user'] = $user;
		$companies = $data['me']->companies()->pluck('companies.id')->toArray();
		$ucompanies = $data['user']->companies()->pluck('companies.id')->toArray();
		$comp_profiles = $company->profiles()->pluck("id")->toArray();
		$comp_homes = $company->homes()->pluck("id")->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even do this shit?
		if(!$data['me']->hasRoleForCompany('admin', $company->id) ) return redirect()->route('account-business-company', array('company' => $company->id));

		//this fool even part of my company?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//if( $data['me']->mayI("manage_billing_methods", $company->id) ) { return "true"; } else { return "false"; }

		switch ( $data['m'] ) {
			case "company":

				//check if role exists..
				$relationship = Role::firstOrNew(['permissions' => $data['access_granted']]);

				if ( ! $relationship->exists ) {
					$relationship->permissions = $data['access_granted'];
					$relationship->is_generic = false;
					$relationship->name = $data['access_granted'];
					$relationship->display_name = $data['access_granted'];
					$relationship->description = "";//kage?
					$relationship->save();
				}

				//put role id on company user
				$user_update = CompanyUser::firstOrNew(['company_id' => $company->id, 'user_id' => $data['user']->id]);
				$user_update->role_id = $relationship->id;
				$user_update->save();

			break;
			case "homes":
				//grant/revoke for homes..

			 if ( isset($data['access_granted']) ) {
				foreach ( $data['access_granted'] as $hid) {
					//does this profile belong to the company?
					if(!in_array($hid, $comp_homes) || !$hid) { continue; }

					$relationship = HomeUser::firstOrNew([
						'user_id' 		=> $data['user']->id, 
						'home_id' 	=> $hid
					]);

					$relationship->user_id = $data['user']->id;
					$relationship->home_id = $hid;
					$relationship->company_id = $company->id;
					$relationship->role_id = 2;//kage?
					$relationship->deleted_at = null;
					$relationship->save();
				}
			 }

			 if ( isset($data['access_denied']) ) {
				foreach ( $data['access_denied'] as $hid) {
					//does this profile belong to the company?
					if(!in_array($hid, $comp_homes) || !$hid) { continue; }


					$relationship = HomeUser::firstOrNew([
						'user_id' 		=> $data['user']->id, 
						'home_id' 	=> $hid
					]);

					$relationship->user_id = $data['user']->id;
					$relationship->home_id = $hid;
					$relationship->company_id = $company->id;
					$relationship->role_id = 0;//kage?
					//$relationship->deleted_at = now();
					$relationship->save();
					$relationship->delete();
				}
			 }
			break;
			case "profiles":
				//grant/revoke for profiles..


			 if ( isset($data['access_granted']) ) {
				foreach ( $data['access_granted'] as $pid) {
					//does this profile belong to the company?
					if(!in_array($pid, $comp_profiles) || !$pid) { continue; }

					$relationship = ProfileUser::firstOrNew([
						'user_id' 		=> $data['user']->id, 
						'profile_id' 	=> $pid
					]);

					$relationship->user_id = $data['user']->id;
					$relationship->profile_id = $pid;
					$relationship->company_id = $company->id;
					$relationship->role_id = 2;//kage?
					$relationship->deleted_at = null;
					$relationship->save();
				}
			 }

			 if ( isset($data['access_denied']) ) {
				foreach ( $data['access_denied'] as $pid) {
					//does this profile belong to the company?
					if(!in_array($pid, $comp_profiles) || !$pid) { continue; }


					$relationship = ProfileUser::firstOrNew([
						'user_id' 		=> $data['user']->id, 
						'profile_id' 	=> $pid
					]);

					$relationship->user_id = $data['user']->id;
					$relationship->profile_id = $pid;
					$relationship->company_id = $company->id;
					$relationship->role_id = 0;//kage?
					//$relationship->deleted_at = now();
					$relationship->save();
					$relationship->delete();
				}
			 }
			break;
		}

		return $this->jsonAPI($data);
	}

	public function getCompanyEdit(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		return view('account.business.company.edit')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function postCompanyEdit(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		$input_data = Input::only('');
	}

	public function getCompanyCampaigns(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_marketing', $company->id) ) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.campaigns')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyBanners(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_marketing', $company->id) ) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.banners')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyCampaignsView(Company $company, $campaign)
	{
		return view('account.business.company.campaign')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);

		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_marketing', $company->id) ) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.campaign')
					->with('campaign', $campaign)
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyBannersView(Company $company, $banner)
	{
		return view('account.business.company.banner')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);

		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !$me->canForCompany('manage_marketing', $company->id) ) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.banner')
					->with('banner', $banner)
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyCampaignsCreate()
	{
		return view('account.business.company.campaignnew')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyBannersCreate()
	{
		return view('account.business.company.bannernew')
					->with('canvas', Canvas::getDefault())
					->with('company', $company);
	}

	public function getCompanyBilling(Company $company, Profile $profile)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));


		/******** -- Kage Version
		$has_stripe_customer = false;
		$stripeCustomer = false;
		$has_latest_invoice = false;
		$latestInvoice = false;
		$invItems = false;
		$has_invitems = false;
		$has_default_source = false;
		$defaultSource = false;


		if($company->customer_identifier != '') {
			try {
				$stripeCustomer = \Stripe\Customer::retrieve($company->customer_identifier);
				$has_stripe_customer = is_object($stripeCustomer);
			} catch (\Stripe\Error\InvalidRequest $e) {
			  	$has_stripe_customer = false;
			} catch (\Stripe\Error\Authentication $e) {
			 	$has_stripe_customer = false;
			} catch (Exception $e) {
				$has_stripe_customer = false;
			}
		}


		if ($has_stripe_customer) {
			//Fetch Latest Invoice
			$invoices = \Stripe\Invoice::all(['customer' => $company->customer_identifier, 'limit' => 1]);
			if(is_object($invoices) && is_array($invoices->data) && count($invoices->data) == 1 && is_object($invoices->data[0])) {
				$latestInvoice = $invoices->data[0];
				$has_latest_invoice = true;
			}else{
				$latestInvoice = false;
				$has_latest_invoice = false;
			}

			//Fetch Invoice Items
			$invItems = \Stripe\InvoiceItem::all(['customer' => $company->customer_identifier]);
			if(is_object($invItems) && is_array($invItems->data)) {
				$has_invitems = true;
			}else{
				$has_invitems = false;
				$invItems = false;
			}
			


			//Fetch Default Card
			$has_default_source = false;
			if(is_object($stripeCustomer->default_source)) {
				$defaultSource = $stripeCustomer->default_source;
				$has_default_source = true;
			}


			$cards = $stripeCustomer->sources->all(['object' => 'card', 'limit' => 1]);

			if(is_object($cards) && is_object($cards->data[0])){
				$defaultSource = $cards->data[0];
				$has_default_source = true;
			}
		}else{
			$stripeCustomer = false;
		}

		return view('account.business.company.billing')
					->with('canvas', Canvas::getDefault())
					->with('has_stripe_customer', $has_stripe_customer)
					->with('customer', $stripeCustomer)
					->with('has_latest_invoice', $has_latest_invoice)
					->with('latest_invoice', $latestInvoice)
					->with('has_invitems', $has_invitems)
					->with('invitems', $invItems)
					->with('has_default_source', $has_default_source)
					->with('default_source', $defaultSource)
					->with('company', $company)
					->with('invoices', $invoices)
					->withErrors($err);
		********************************************************************/


		$err = null;
		$has_stripe = false;

		//Find upcoming renewals..
		$renews = Subscription::where('company_id', $company->id)
						->orderBy('ends_at', 'desc')
						->take(5)
						->get();
		$transactions = StoreTransaction::where('company_id', $company->id)
						->orderBy('id', 'desc')
						->take(100)
						->get();

		if ( $company->stripe_customer_id )
		{
			//We have billing info..

			return view('account.business.company.billing')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', true)
					->with('default_source', false)
					->with('company', $company)
					->with('me', $me)
					->with('renews', $renews)
					->with('transactions', $transactions)
					->with('profiles', $me->profiles())
					->withErrors($err);
		} else {
			//This user has no billing info
			return view('account.business.company.billing')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', false)
					->with('company', $company)
					->with('transactions', null)
					->with('invoices', [])
					->with('expd', " - - - ")
					->withErrors($err);

		}


	}


	public function getCompanyBillingManageSubscriptions(Company $company, Profile $profile)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));


		$err = null;
		$has_stripe = false;

		//Find upcoming renewals..
		$renews = Subscription::where('company_id', $company->id)
						->orderBy('ends_at', 'desc')
						->take(5)
						->get();


		if ( $company->stripe_customer_id )
		{
			//We have billing info..

			return view('account.business.company.managesubscriptions')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', true)
					->with('default_source', false)
					->with('company', $company)
					->with('me', $me)
					->with('renews', $renews)
					->with('profiles', $me->profiles())
					->withErrors($err);
		} else {
			//This user has no billing info
			return view('account.business.company.managesubscriptions')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', true)
					->with('default_source', false)
					->with('company', $company)
					->with('me', $me)
					->with('renews', $renews)
					->with('profiles', $me->profiles())
					->withErrors($err);

		}


	}

	public function getCompanyBillingManageSubscriptionsCancelSubscription(Company $company, Profile $profile, $source_id)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));
		

		//remove the sub..

		$sub = $company->subscriptions->where('id', (int)$source_id)->first();
		$customer 	= \Stripe\Customer::retrieve($company->stripe_customer_id);
		$t = $customer->subscriptions->retrieve($sub->stripe_subscription_id)->cancel(array("cancel_at_period_end" => true ));
		if( $t->cancel_at_period_end ) {
			$store_subscription = Subscription::where('stripe_subscription_id', $t->id)->first();
			$store_subscription->auto_renew = false;
			$store_subscription->save();
			return redirect()->back();
		} else {
			//some error handling..
		}

	}

	public function getCompanyBillingManageSubscriptionsRenewSubscription(Company $company, Profile $profile, $source_id)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));
		

		//remove the sub..

		$sub = $company->subscriptions->where('id', (int)$source_id)->first();
		$customer 	= \Stripe\Customer::retrieve($company->stripe_customer_id);
		$t = $customer->subscriptions->retrieve($sub->stripe_subscription_id);
		$t->cancel_at_period_end = false;
		$t->save();

		if( ! $t->cancel_at_period_end ) {
			$store_subscription = Subscription::where('stripe_subscription_id', $t->id)->first();
			$store_subscription->auto_renew = true;
			$store_subscription->save();
			return redirect()->back();
		} else {
			//some error handling..
		}

	}

	public function getCompanyBillingManageCards(Company $company, Profile $profile)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));


		$err = null;
		$has_stripe = false;

		//Find upcoming renewals..
		$renews = Subscription::where('company_id', $company->id)
						->orderBy('ends_at', 'desc')
						->take(5)
						->get();
		$transactions = StoreTransaction::where('company_id', $company->id)
						->orderBy('id', 'desc')
						->take(100)
						->get();

		if ( $company->stripe_customer_id )
		{
			//We have billing info..

			return view('account.business.company.managecards')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', true)
					->with('default_source', false)
					->with('company', $company)
					->with('me', $me)
					->with('renews', $renews)
					->with('transactions', $transactions)
					->with('profiles', $me->profiles())
					->withErrors($err);
		} else {
			//This user has no billing info
			return view('account.business.company.managecards')
					->with('canvas', Canvas::getDefault())
					->with('has_default_source', false)
					->with('company', $company)
					->with('transactions', null)
					->with('invoices', [])
					->with('expd', " - - - ")
					->withErrors($err);

		}


	}


	public function getCompanyBillingManageCardsCreateCard(Company $company, Profile $profile)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));

			//user wants to create a new source..

			//first check for token..
			$validator = Validator::make(Request::all(),
				array('stripeToken' => 'required'),
				array('stripeToken.required' => 'You must enter a payment source')
			);

			if($validator->fails()) {
				return redirect()->back()->withInput()->withErrors($validator);
			}

			$att = [
				'company_id' => $company->id,
				'source_token' => Request::get('stripeToken'),
				'nickname' => Request::get('source-name')
			];


			if ( $company->stripe_customer_id == null ) {

				$validator = Validator::make(Request::all(),
					array('billing-email' => 'required'),
					array('billing-email.required' => 'You must enter a billing email')
				);

				if($validator->fails()) {
					return redirect()->back()->withInput()->withErrors($validator);
				}

				//check if there is already a company using this email...

				$att['billing-email'] = Request::get('billing-email');

			} else {

				//add the source from token to stripe customer...
				$att['stripe_customer_id'] = $company->stripe_customer_id;

			}

			$att = self::addCardToCompany($att);
			return redirect()->back();

	}

	public function getCompanyBillingManageCardsRemoveCard(Company $company, Profile $profile, $source_id)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));
		//remove the card..
		$customer 	= \Stripe\Customer::retrieve($company->stripe_customer_id);
		$cid = $company->paysources->where('id', (int)$source_id )->first();
		if ( $cid->is_default ) { return redirect()->back(); }
		$del = $customer->sources->retrieve($cid->stripe_card_id)->delete();
		if ( $del->deleted ) {
			//deleted that sucka

			$cid->deleted_at = 'NOW()';
			$cid->save();

			return redirect()->back();

		} else {
			//need some error handling..
		}

	}

	public function getCompanyBillingManageCardsSetDefault(Company $company, Profile $profile, $source_id)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));
		//update the card.
		$customer 	= \Stripe\Customer::retrieve($company->stripe_customer_id);
		  $old = $company->paysources->where('is_default', true )->where('company_id', $company->id)->first();
		  if($old){
		  $old->is_default = false;
		  $old->save();
		}
		$cid = $company->paysources->where('id', (int)$source_id )->first();
		  if ( $cid->is_default ) { return redirect()->back(); }
		  $cid->is_default = true;
		  $cid->save();

		  return redirect()->back();
	}


	public function getCompanyMakePayment(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));

		$has_stripe_customer = false;
		$stripeCustomer = false;
		$has_latest_invoice = false;
		$latestInvoice = false;
		$invItems = false;
		$has_invitems = false;
		$has_default_source = false;
		$defaultSource = false;

		if($company->customer_identifier != '') {
			try {
				$stripeCustomer = \Stripe\Customer::retrieve($company->customer_identifier);
				$has_stripe_customer = is_object($stripeCustomer);
			} catch (\Stripe\Error\InvalidRequest $e) {
			  	$has_stripe_customer = false;
			} catch (\Stripe\Error\Authentication $e) {
			 	$has_stripe_customer = false;
			} catch (Exception $e) {
				$has_stripe_customer = false;
			}
		}

		if ($has_stripe_customer) {
			//Fetch Default Card
			if(is_object($stripeCustomer->default_source)) {
				$defaultSource = $stripeCustomer->default_source;
				$has_default_source = true;
			}


			$cards = $stripeCustomer->sources->all(['object' => 'card', 'limit' => 1]);

			if(is_object($cards) && is_object($cards->data[0])){
				$defaultSource = $cards->data[0];
				$has_default_source = true;
			}
		}else{
			$has_default_source = false;
			$defaultSource = false;
		}

		return view('account.business.company.makepayment')
					->with('canvas', Canvas::getDefault())
					->with('has_stripe', $has_stripe_customer)
					->with('has_default_source', $has_default_source)
					->with('default_source', $defaultSource)
					->with('customer', $stripeCustomer)
					->with('company', $company);
	}

	public function postCompanyMakePayment(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access billing at this company?
		if(!$me->hasRoleForCompany('admin', $company->id) && !( $me->canForCompany('manage_billing_methods', $company->id) || $me->canForCompany('set_billing_methods', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));

		$stripeCustomer = false;
		if($company->customer_identifier != '') {
			try {
				$stripeCustomer = \Stripe\Customer::retrieve($company->customer_identifier);
				$has_stripe_customer = is_object($stripeCustomer);
			} catch (\Stripe\Error\InvalidRequest $e) {
			  	$has_stripe_customer = false;
			} catch (\Stripe\Error\Authentication $e) {
			 	$has_stripe_customer = false;
			} catch (Exception $e) {
				$has_stripe_customer = false;
			}
		}

		if(!$has_stripe_customer) {
			return redirect()->route('account-business-company-billing', ['company' => $company->id])
						->with('error', 'Account is not configured for online billing. Notify technical support.');
		}

		$year = date('Y')-2000;

		$validator = Validator::make([
			'amount_choice' => 'required|in:full,other',
			'amount' => 'required',
			'name' => 'required',
			'card_number' => 'required',
			'month' => 'required|in:1,2,3,4,5,6,7,8,9,01,02,03,04,05,06,07,08,09,10,11,12',
			'year' => 'required|between:'.$year.','.($year+9),
			'cv_code' => 'required',
			'address' => 'required',
			'state' => 'required|exists:states,id',
			'city' => 'required|exists:places,id'
		], [
			'amount_choice.required' => '',
			'amount_choice.in' => '',
			'amount.required' => '',
			'name.required' => '',
			'card_number.required' => '',
			'month.required' => '',
			'month.in' => '',
			'year.required' => '',
			'year.between' => '',
			'cv_code.required' => '',
			'address.required' => '',
			'state.required' => '',
			'state.exists' => '',
			'city.required' => '',
			'city.exists' => ''
		]);

		if ($validator->fails()) {
			return redirect()->route('account-business-company-makepayment', ['company' => $company->id])
						->withErrors($validator);
		}else{
			//PROCESS PAYMENT

			//VERIFY PAYMENT

			//REDIRECT BACK
		}
	}

	public function getCompanySettings(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access settings at this company?
		if( !( $me->hasRoleForCompany('admin', $company->id) || $me->canForCompany('manage_settings', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));

		return view('account.business.company.settings')
					->with('canvas', Canvas::getDefault())
					->with('states', State::all())
					->with('company', $company);
	}

	public function postCompanySettings(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		//Can I even access settings at this company?
		if( !( $me->hasRoleForCompany('admin', $company->id) || $me->canForCompany('manage_settings', $company->id) ) ) return redirect()->route('account-business-company', array('company' => $company->id));

		/* PLEASE NOTE:
		 * ------------------------------
		 * Not adding email as its tied
		 * to stripe.. Manage in billing.
		 * ... for now
		 ********************************/

		$fields = [
			'name' => 'required',
			'phone' => 'required|phone:US',
			'fax' => 'phone:US',
			'street_addr' => 'required',
			'street_addr2' => '',
			'state' => 'required|exists:states,id',
			'city' => 'required|exists:places,id,state_id,'.intval(Input::get('state', 1)),
			'zip_code' => 'regex:/[0-9]{5}(?:\-[0-9]{4})?/'
		];
		
		$validator = Validator::make(Input::only(array_keys($fields)), $fields);

		if($validator->fails()) {
			return Redirect::route('business-settings-post', ['company' => $company->id])
							->withErrors($validator)
							->withInput(Input::only(array_keys($fields)));
		}

		$company->name = str_slug(Input::get('name'));
		$company->title = Input::get("name");
		$company->phone = Input::get("phone");
		$company->fax = Input::get("fax");
		$company->street_addr = Input::get("street_addr");
		$company->street_addr2 = Input::get("street_addr2");
		$company->state_id = Input::get("state");
		$company->city_id = Input::get("city");
		$company->zip_code = Input::get("zip_code");
		$company->save();

		return self::getCompanySettings($company);
	}

	public function getProfile(Company $company, Profile $profile)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to edit a profile I'm not a part of? Is this profile even part of this company?
		if(!in_array($company->id, $companies) || $profile->company_id != $company->id) return redirect()->route('account-business');

		return view('account.business.profile')
					->with('canvas', Canvas::getDefault())
					->with('company', $company)
					->with('profile', $profile);
	}

	public function getCompanyProfileCreate(Company $company)
	{
		$me = Auth::user();
		$companies = $me->companies()->pluck('companies.id')->toArray();

		//Am I trying to create a profile in a company I'm not a part of?
		if(!in_array($company->id, $companies)) return redirect()->route('account-business');

		return view('account.business.company.profilecreate')
					->with('company', $company);
	}

	public function postCompanyProfileCreate(Company $company)
	{
		$profile_type = in_array(Input::get('type'), Profile::listTypes()) ? Input::get('') : 'community';

		$fields = [
			'title' => 'required',
			'description' => '',
			'phone' => 'required|phone:US',
			'fax' => 'phone:US',
			'email' => 'email',
			'address' => '',
			'city' => '',
			'state' => 'in:AK,AL,AZ,AR,CA,CO,CT,DE,FL,GA,HI,ID,IL,IN,IA,KS,KY,LA,ME,MD,MA,MI,MN,MS,MO,MT,NE,NV,NH,NJ,NM,NY,NC,ND,OH,OK,OR,PA,RI,SC,SD,TN,TX,UT,VT,VA,WA,WV,WI,WY',
			'zipcode' => 'regex:/[0-9]{5}(?:\-[0-9]{4})?/'
		];

		switch ($profile_type) {
			case 'community':
				$checkboxes = [
					'pets',
					'gated',
					'pool',
					'rec',
					'fitness',
					'playground',
					'picnic',
					'basketball',
					'tennis',
					'golf',
					'shuffleboard',
					'fishing',
					'storage'
				];

				foreach ($checkboxes as $value) {
					$fields[$value] = 'boolean';
				}
				break;
			default:
				# code...
				break;
		}
		
		$validator = Validator::make(Input::only(array_keys($fields)), $fields);

		if($validator->fails()) {
			return Redirect::route('account-business-company-profiles-create', ['company' => $company->id])
							->withErrors($validator)
							->withInput(Input::only(array_keys($fields)));
		}


		$profile = new Profile;
		$profile->company_id = $company->id;
		$profile->type = $profile_type;

		
		foreach($fields as $field => $value) {
			if(in_array($field, ['description', 'address'])) {
				$profile->{$field} = htmlentities(Input::get($field));
				
			}elseif($field == 'state') {
				$profile->state_id = 5;//needs fix: State::byAbbr(Input::get($field));
			}elseif($field == 'city') {
				$profile->city_id = 150965769;//needs fix: Input::get($field);
				
			}else{
				
				$profile->{$field} = Input::get($field);
			}

		}

		if (!$profile->save()) {

			return Redirect::route('account-business-company-profiles-create', ['company' => $company->id])
							->withErrors($validator)
							->withInput(Input::only(array_keys($fields)));
		}

		return Redirect::route('account-business-company-profiles-edit', ['company' => $company->id, 'profile' => $profile->id])
						->with('success', 'done');
	}

	public function getCompanyProfileEdit(Company $company, Profile $profile)
	{
			return Redirect::route('editor', ['profile' => $profile->id, 'from_company' => $profile->company_id])
							->with('success', 'Profile has been created!');
	}

	public function postCompanyProfileEdit(Company $company, Profile $profile)
	{
		$fields = [
			'title' => 'required',
			'about_us' => '',
			'phone' => 'required|phone:US',
			'fax' => 'phone:US',
			'email' => 'email',
			'address' => '',
			'city' => '',
			'state' => 'in:AK,AL,AZ,AR,CA,CO,CT,DE,FL,GA,HI,ID,IL,IN,IA,KS,KY,LA,ME,MD,MA,MI,MN,MS,MO,MT,NE,NV,NH,NJ,NM,NY,NC,ND,OH,OK,OR,PA,RI,SC,SD,TN,TX,UT,VT,VA,WA,WV,WI,WY',
			'zip' => 'regex:/[0-9]{5}(?:\-[0-9]{4})?/'
		];

		switch ($profile->type) {
			case 'community':
				$checkboxes = [
					'pets',
					'gated',
					'pool',
					'rec',
					'fitness',
					'playground',
					'picnic',
					'basketball',
					'tennis',
					'golf',
					'shuffleboard',
					'fishing',
					'storage'
				];

				foreach ($checkboxes as $value) {
					$fields[$value] = 'boolean';
				}
				break;
			default:
				# code...
				break;
		}
		
		$validator = Validator::make(Input::only(array_keys($fields)), $fields);

		if($validator->fails()) {
			return Redirect::route('account-business-company-profiles-create', ['company' => $company->id])
							->withErrors($validator)
							->withInput(Input::only(array_keys($fields)));
		}

		foreach($fields as $field => $value) {
			if(in_array($field, ['about_us', 'address'])) {
				$profile->{$field} = htmlentities(Input::get($field));
			}elseif($field == 'state') {
				$profile->state_id = State::byAbbr(Input::get($field));
			}elseif($field == 'city') {
				$profile->city_id = Input::get($field);
			}else{
				$profile->{$field} = Input::get($field);
			}
		}

		if (!$profile->save()) {
			return Redirect::route('account-business-company-profiles-create', ['company' => $company->id])
							->withErrors($validator)
							->withInput(Input::only(array_keys($fields)));
		}

		return Redirect::route('account-business-company-profiles-edit', ['company' => $company->id, 'profile' => $profile->id])
						->with('success', 'saved');
	}

	public function postActivate()
	{
		$validator = Validator::make(Input::all(),
			array(
				'firstname' => 'required|between:2,48',
				'lastname' => 'required|between:2,48',
				'email' => 'required|email',
				'addressa' => 'required|between:6,64',
				'addressb' => 'max:48',
				'city' => 'required|between:3,48',
				'state' => 'required|exists:states,id',
				'phone' => 'required',
			)
		);

		if($validator->fails()) {
			return redirect()->route('account-business-activate')
							->withErrors($validator)
							->withInput(Input::all());
		}else{

			$user = Auth::user();
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->emailb = Input::get('email');
			$user->address = Input::get('addressa');
			if(Input::has('addressb')) $user->addressb = Input::get('addressb');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->phone = preg_replace('/\D+/', '', Input::get('phone'));
			$user->business = 1;

			$user->save();

			if(Session::has('task')) {
				$path = session('task');
				Session::forget('task');
				return redirect($path);
			}else{
				return redirect()->route('account-business');
			}
		}

	}



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


}