<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Redirect;
use Response;
use View;
use DB;
use App\User;
use App\Models\Company;
use App\Models\Profile;
use App\Models\CompanyUser;
use App\Models\ProfileUser;
use Stripe\Stripe;

/************************
	use Stripe\Invoice;
	use Stripe\Customer;
	use Stripe\Error\InvalidRequest;
	use Stripe\Error\Authentication;
*************************/

class BrowseController extends Pony {

	public function getUsers()
	{
		return view('admin.browse.users')
					->with('title', 'Browse users')
					->with('menutitle', 'Browse Menu')
					->with('users', User::orderBy('id', 'desc')->with('roles')->paginate(25));
	}

	public function getCompanies()
	{
		return view('admin.browse.companies')
					->with('title', 'Browse companies')
					->with('menutitle', 'Browse Menu')
					->with('companies', Company::orderBy('id', 'desc')->paginate(25));
	}

	public function getProfiles()
	{
		return view('admin.browse.profiles')
					->with('title', 'Browse profiles')
					->with('menutitle', 'Browse Menu')
					->with('profiles', Profile::orderBy('id', 'desc')->paginate(25));
	}

	public function getUserView(User $user)
	{
		return view('admin.browse.userview')
					->with('title', 'Browse users')
					->with('menutitle', 'Browse Menu')
					->with('profile', $user);
	}

	public function getUserEdit(User $user)
	{
		return view('admin.browse.useredit')
					->with('title', 'Browse users')
					->with('menutitle', 'Browse Menu');
	}

	public function getUserDelete(User $user)
	{
		$user->delete();

		return redirect()->route('admin-browse-users')
						->with('success', 'User successfully removed.');
	}

	public function getUserCompanyLink(User $user, Company $company)
	{
		$link = CompanyUser::fetch($user, $company)->first();

		return view('admin.browse.usercompanylink')
					->with('title', 'Browse users')
					->with('menutitle', 'Browse Menu')
					->with('profile', $user)
					->with('company', $company)
					->with('link', $link)
					->with('profiles', $link->profiles()->paginate(25));
	}

	public function getCompanyUserLink(Company $company, User $user)
	{
		return $this->getUserCompanyLink($user, $company)
					->with('title', 'Browse companies');
	}

	public function getUserProfileLink(User $user, Profile $profile)
	{
		$link = ProfileUser::fetch($user, $profile);

		return view('admin.browse.userprofilelink')
					->with('title', 'Browse users')
					->with('menutitle', 'Browse Menu')
					->with('profile', $user)
					->with('prof', $profile)
					->with('link', $link);
	}

	public function getCompanyView(Company $company)
	{
		return view('admin.browse.companyview')
					->with('title', 'Browse companies')
					->with('menutitle', 'Browse Menu')
					->with('company', $company)
					->with('profiles', $company->profiles()->paginate(5))
					->with('users', $company->companyUsers()->paginate(5));
	}

	public function getCompanyEdit(Company $company)
	{
		return view('admin.browse.companyedit')
					->with('company', $company)
					->with('title', 'Browse companies')
					->with('menutitle', 'Browse Menu');
	}

	public function getCompanyBilling(Company $company)
	{
		$stripeCustomer = false;
		if($company->customer_identifier != '') {
			$stripeCustomer = \Stripe\Customer::retrieve($company->customer_identifier);
		}

		$hasStripeAcct = isset($stripeCustomer) && is_object($stripeCustomer);

		if(!$hasStripeAcct && $company->customer_identifier != '') {
			$company->customer_identifier = '';
			$company->save();
		}

		if($hasStripeAcct) {

			//Fetch upcoming Invoice
			$upcomingInvoice = false;
			try {
				$upcomingInvoice = \Stripe\Invoice::upcoming(['customer' => $company->customer_identifier]);
				$has_upcoming_invoice = is_object($upcomingInvoice);
			} catch (\Stripe\Error\InvalidRequest $e) {
			  $has_upcoming_invoice = false;
			} catch (\Stripe\Error\Authentication $e) {
			  $has_upcoming_invoice = false;
			} catch (Exception $e) {
				$has_upcoming_invoice = false;
			}
		}

		return view('admin.browse.companybilling')
					->with('has_stripe_account', $hasStripeAcct)
					->with('company', $company)
					->with('customer', $stripeCustomer)
					->with('has_upcoming_invoice', $has_upcoming_invoice)
					->with('upcoming_invoice', $upcomingInvoice)
					->with('title', 'Browse companies')
					->with('menutitle', 'Browse Menu');
	}

	public function getCompanyDelete(Company $company)
	{
		$company->delete();

		return redirect()->route('admin-browse-companies')
						->with('success', 'Company successfully removed.');
	}

}