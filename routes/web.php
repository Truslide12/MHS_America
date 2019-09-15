<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;


//Route::group(array('domain' => 'luna.mhsamerica.com'), function()
Route::group(array('prefix' => 'luna'), function()
{

	/* GUEST */
	Route::group(array('middleware' => 'admin.guest'), function()
	{
		/* Administration login */
		Route::get('login', array('uses' => 'Admin\WelcomeController@getLogin', 'as' => 'admin-login'));
		/* Administration login (POST) */
		Route::post('login', array('uses' => 'Admin\WelcomeController@postLogin', 'as' => 'admin-login-post'));
	});

	/* LOGGED IN */
	Route::group(array('middleware' => 'admin'), function()
	{
		/* Administration dashboard */
		Route::get('/', array('uses' => 'Admin\WelcomeController@getIndex', 'as' => 'admin-welcome'));
		/* Administration messages */
		Route::get('messages', array('uses' => 'Admin\WelcomeController@getMessages', 'as' => 'admin-messages'));
		/* Administration bug reports */
		Route::get('bug-reports', array('uses' => 'Admin\WelcomeController@getBugReports', 'as' => 'admin-reports'));
		/* Administration content - pages */
		Route::get('content/pages', array('uses' => 'Admin\WelcomeController@getPages', 'as' => 'admin-content-pages'));
		/* Administration content - news */
		Route::get('content/news', array('uses' => 'Admin\WelcomeController@getNews', 'as' => 'admin-content-news'));
		

		/**************************************************************************************************************************************/
		/* Administration customers management */
		Route::get('customers', array('uses' => 'Admin\CustomersController@getIndex', 'as' => 'admin-customers'));
		Route::get('customers/index', array('uses' => 'Admin\CustomersController@getCustomers', 'as' => 'admin-customers-index'));
		Route::get('customers/company-accounts', array('uses' => 'Admin\CustomersController@getCompanyAccounts', 'as' => 'admin-customers-company-accounts'));
		Route::get('customers/personal-accounts', array('uses' => 'Admin\CustomersController@getPersonalAccounts', 'as' => 'admin-customers-personal-accounts'));
		Route::get('customers/lookup', array('uses' => 'Admin\CustomersController@getCustomerLookup', 'as' => 'admin-customers-lookup'));
		Route::get('customer/{id}', array('uses' => 'Admin\CustomersController@getAccount', 'as' => 'admin-customer-edit'));
		Route::post('customer/gift/home/{id}', array('uses' => 'Admin\CustomersController@postGiftHome', 'as' => 'admin-customer-gift-home'));

		/**************************************************************************************************************************************/
		/* Administration community management */
		Route::get('communities', array('uses' => 'Admin\WelcomeController@getCommunitiesIndex', 'as' => 'admin-communities'));
		Route::get('communities/spotlight', array('uses' => 'Admin\WelcomeController@getCommunitiesSpotlight', 'as' => 'admin-communities-spotlight'));
		Route::get('communities/spotlight/{id}', array('uses' => 'Admin\WelcomeController@getCommunitiesSpotlightRecord', 'as' => 'admin-communities-spotlight-edit'));
		Route::post('communities/spotlight/{id}', array('uses' => 'Admin\WelcomeController@postCommunitiesSpotlightRecord', 'as' => 'admin-communities-spotlight-edit-post'));
		Route::post('communities/spotlights/new', array('uses' => 'Admin\WelcomeController@postCommunitiesSpotlightNew', 'as' => 'admin-communities-spotlight-new-post'));
		Route::post('communities/spotlight/{id}/remove', array('uses' => 'Admin\WelcomeController@postCommunitiesSpotlightRemove', 'as' => 'admin-communities-spotlight-remove-post'));
		Route::get('communities/amenities', array('uses' => 'Admin\WelcomeController@getCommunitiesAmenities', 'as' => 'admin-communities-amenities'));
		Route::post('communities/amenities', array('uses' => 'Admin\WelcomeController@postCommunitiesAmenities', 'as' => 'admin-communities-amenities'));
		Route::get('communities/plans', array('uses' => 'Admin\WelcomeController@getCommunitiesPlans', 'as' => 'admin-communities-plans'));
		Route::get('communities/settings', array('uses' => 'Admin\WelcomeController@getCommunitiesSettings', 'as' => 'admin-communities-settings'));
		

		
		/* Administration server status */
		Route::get('server-status', array('uses' => 'Admin\WelcomeController@getServerStatus', 'as' => 'admin-server'));

		Route::group(array('prefix' => 'derpy'), function()
		{
			/* Administration API - Site down */
			Route::post('down', array('uses' => 'Admin\DerpyController@postDown', 'as' => 'admin-api-down'));
			/* Administration API - Site up */
			Route::post('up', array('uses' => 'Admin\DerpyController@postUp', 'as' => 'admin-api-up'));

			Route::post('action/{action}/{relation}/{id}', array('uses' => 'Admin\DerpyController@postAction', 'as' => 'admin-api-action'));
		});

		Route::group(array('prefix' => 'browse'), function()
		{
			/*-----------------*/
			Route::pattern('user_wt', '[0-9]+');
			Route::pattern('company_wt', '[0-9]+');
			Route::pattern('profile_wt', '[0-9]+');

			Route::bind('user_wt', function($val) {
				//return User::withTrashed()->find($val);
				return \App\User::withTrashed()->find($val);
			});
			Route::bind('company_wt', function($val) {
				return \App\Models\Company::withTrashed()->find($val);
			});
			Route::bind('profile_wt', function($val) {
				return \App\Models\Profile::withTrashed()->find($val);
			});
			/*-----------------*/

			Route::group(array('prefix' => 'users'), function()
			{

				/* Administration - browse users */
				Route::get('/', array('uses' => 'Admin\BrowseController@getUsers', 'as' => 'admin-browse-users'));
				/* Administration - view user */
				Route::get('{user_wt}', array('uses' => 'Admin\BrowseController@getUserView', 'as' => 'admin-browse-users-view'));
				/* Administration - edit user */
				Route::get('{user_wt}/edit', array('uses' => 'Admin\BrowseController@getUserEdit', 'as' => 'admin-browse-users-edit'));
				/* Administration - delete user */
				Route::get('{user_wt}/delete', array('uses' => 'Admin\BrowseController@getUserDelete', 'as' => 'admin-browse-users-delete'));
				/* Administration - ban user */
				Route::get('{user_wt}/ban', array('uses' => 'Admin\BrowseController@getUserBan', 'as' => 'admin-browse-users-ban'));
				/* Administration - suspend user services */
				Route::get('{user_wt}/suspend', array('uses' => 'Admin\BrowseController@getUserSuspend', 'as' => 'admin-browse-users-suspend'));
				
				/* Administration - edit company link */
				Route::get('{user_wt}/company/{company_wt}', array('uses' => 'Admin\BrowseController@getUserCompanyLink', 'as' => 'admin-browse-users-company-link'));

				Route::get('company-link/{link}/suspend', array('uses' => 'Admin\BrowseController@getUserCompanySuspend', 'as' => 'admin-browse-users-company-link-suspend'));
				Route::get('{user}/company/{company_wt}/sever-user', array('uses' => 'Admin\BrowseController@getUserCompanySeverUser', 'as' => 'admin-browse-users-company-sever-user'));
				Route::get('{user_wt}/company/{company_wt}/sever-company', array('uses' => 'Admin\BrowseController@getUserCompanySeverCompany', 'as' => 'admin-browse-users-company-sever-company'));

				/* Administration - edit profile link */
				Route::get('{user_wt}/profile/{profile_wt}', array('uses' => 'Admin\BrowseController@getUserProfileLink', 'as' => 'admin-browse-users-profile-link'));

				Route::get('profile-link/{link}/suspend', array('uses' => 'Admin\BrowseController@getUserProfileSuspend', 'as' => 'admin-browse-users-profile-link-suspend'));
				Route::get('{user_wt}/profile/{profile_wt}/sever-user', array('uses' => 'Admin\BrowseController@getUserCompanySeverUser', 'as' => 'admin-browse-users-profile-sever-user'));
				Route::get('{user_wt}/profile/{profile_wt}/sever-company', array('uses' => 'Admin\BrowseController@getUserCompanySeverCompany', 'as' => 'admin-browse-users-profile-sever-company'));

			});

			Route::group(array('prefix' => 'companies'), function()
			{
				
				/* Administration - browse companies */
				Route::get('/', array('uses' => 'Admin\BrowseController@getCompanies', 'as' => 'admin-browse-companies'));
				/* Administration - view company */

				/* Administration - view company */

				Route::get('{company_wt}', array('uses' => 'Admin\BrowseController@getCompanyView', 'as' => 'admin-browse-companies-view'));
				/* Administration - edit company */
				Route::get('{company_wt}/edit', array('uses' => 'Admin\BrowseController@getCompanyEdit', 'as' => 'admin-browse-companies-edit'));
				/* Administration - edit billing */
				Route::get('{company_wt}/billing', array('uses' => 'Admin\BrowseController@getCompanyBilling', 'as' => 'admin-browse-companies-billing'));
				/* Administration - delete company */
				Route::get('{company_wt}/delete', array('uses' => 'Admin\BrowseController@getCompanyDelete', 'as' => 'admin-browse-companies-delete'));

				/* Administration - edit company link */
				Route::get('{company_wt}/user/{user_wt}', array('uses' => 'Admin\BrowseController@getCompanyUserLink', 'as' => 'admin-browse-users-company-link-rev'));
			});

			Route::group(array('prefix' => 'profiles'), function()
			{
				
				/* Administration - browse profiles */
				Route::get('/', array('uses' => 'Admin\BrowseController@getProfiles', 'as' => 'admin-browse-profiles'));

				/* Administration - view profile */
				Route::get('{profile_wt}', array('uses' => 'Admin\BrowseController@getProfileView', 'as' => 'admin-browse-profiles-view'));
				/* Administration - edit profile */
				Route::get('{profile_wt}/edit', array('uses' => 'Admin\BrowseController@getProfileEdit', 'as' => 'admin-browse-profiles-edit'));
				/* Administration - delete profile */
				Route::get('{profile_wt}/delete', array('uses' => 'Admin\BrowseController@getProfileDelete', 'as' => 'admin-browse-profiles-delete'));
			});

			/* Administration - browse profiles */
			Route::get('profiles', array('uses' => 'Admin\BrowseController@getProfiles', 'as' => 'admin-browse-profiles'));
			/* Administration - browse companies */
			Route::get('companies', array('uses' => 'Admin\BrowseController@getCompanies', 'as' => 'admin-browse-companies'));
		});

		Route::group(array('prefix' => 'moderation'), function()
		{
			/* Administration moderation panel */
			Route::get('/', array('uses' => 'Admin\ModController@getIndex', 'as' => 'admin-moderation'));
			/* Administration moderation panel - resolved reports */
			Route::get('resolved', array('uses' => 'Admin\ModController@getResolved', 'as' => 'admin-moderation-resolved'));
		});
	});

});

/* --{ MHS AMERICA }-- */
//Route::group(array('domain' => 'mhsamerica.com'), function()
//{
	/*-----------------*/
	Route::pattern('slug', '[a-z_-]+');
	Route::pattern('id', '[0-9]+');

	Route::pattern('state', '[a-z_-]+');
	Route::pattern('county', '[a-z_-]+');
	Route::pattern('city', '[a-z_-]+');
	Route::pattern('region', '[a-z_-]+');
	/*-----------------*/

	/* City shortcut redirect (GET) */
	Route::get('city/{id}', array('uses' => 'ExploreController@getCityShortcut', 'as' => 'city-shortcut'));

	/* Explore the nation (GET) */
	Route::get('locale/{path}', array('uses' => 'ExploreController@getLocaleRedirect'))->where('path', '.*');

	/* EXPLORE ROUTES */
	Route::group(array('prefix' => 'explore'), function()
	{
		
		/* Explore the nation (GET) */
		Route::get('/', array('uses' => 'ExploreController@getIndex', 'as' => 'explore'));
		/* Explore the state (GET) */
		Route::get('{state}', array('uses' => 'ExploreController@getState', 'as' => 'state'));
		/* Explore everything in the state (GET) */
		Route::get('{state}/everything', array('uses' => 'ExploreController@getStateEverything', 'as' => 'state-everything'));
		/* Explore spotlight profiles of the state (GET) */
		Route::get('{state}/spotlight', array('uses' => 'ExploreController@getStateSpotlight', 'as' => 'state-spotlight'));
		/* Explore a general area (GET) */
		Route::get('{state}/region/{region}', array('uses' => 'ExploreController@getRegion', 'as' => 'region'));
		/* Explore a county (GET) */
		Route::get('{state}/{county}', array('uses' => 'ExploreController@getCounty', 'as' => 'county'));
		/* Explore a city (GET) */
		Route::get('{state}/{county}/{city}', array('uses' => 'ExploreController@getCity', 'as' => 'city'));

		Route::post('{state}/city-query', array('uses' => 'ExploreController@getStateCityQuery', 'as' => 'state-city-query'));

	});

	/* ACCOUNT ROUTES */
	Route::group(array('prefix' => 'account'), function()
	{

		/* User Routes */
		Route::group(array('middleware' => 'auth'), function()
		{
			/* Account dashboard (GET) */
			Route::get('/', array('uses' => 'AccountController@getIndex', 'as' => 'account'));
			/* Account settings (GET) */
			Route::get('settings', array('uses' => 'AccountController@getSettings', 'as' => 'account-settings'));
			/* My Companies (GET) */
			Route::get('mycompanies', array('uses' => 'AccountController@getMyCompanies', 'as' => 'account-mycompanies'));

			/* Account communities watched (GET) */
			Route::get('watched/communities', array('uses' => 'AccountController@getCommunities', 'as' => 'account-communities'));
			/* Account homes watched (GET) */
			Route::get('watched/homes', array('uses' => 'AccountController@getHomes', 'as' => 'account-homes'));
			/* Account spaces watched (GET) */
			Route::get('watched/spaces', array('uses' => 'AccountController@getSpaces', 'as' => 'account-spaces'));
			/* Account professionals watched (GET) */
			Route::get('watched/profiles', array('uses' => 'AccountController@getProfessionals', 'as' => 'account-professionals'));
			/* Account companies watched (GET) */
			Route::get('watched/companies', array('uses' => 'AccountController@getCompanies', 'as' => 'account-companies'));

			/* Account business activate (GET) */
			Route::get('business/activate', array('uses' => 'BusinessController@getActivate', 'as' => 'account-business-activate'));		

			Route::group([], function()
			{	
				/* Account settings (POST) */
				Route::post('settings', array('uses' => 'AccountController@postSettings', 'as' => 'account-settings-post'));
				/* Account change password (POST) */
				Route::post('password', array('uses' => 'AccountController@postPassword', 'as' => 'account-password-post'));
			});

			Route::group(array('prefix' => 'business', 'middleware' => 'auth.business'), function()
			{
				
				/*-----------------*/
				Route::pattern('company', '[0-9]+');
				Route::model('company', \App\Models\Company::class);
				Route::pattern('profile', '[0-9]+');
				Route::model('profile', \App\Models\Profile::class);
				Route::pattern('user', '[0-9]+');
				Route::model('user', \App\User::class);
				/*-----------------*/

				/* Account business (GET) */
				Route::get('/', array('uses' => 'BusinessController@getIndex', 'as' => 'account-business'));

				/* Account beginner's guide (GET) */
				Route::get('guide', array('uses' => 'BusinessController@getGuide', 'as' => 'account-business-guide'));

				Route::group(array('prefix' => 'company'), function()
				{
					/* Account business create company (GET) */
					Route::get('create', array('uses' => 'BusinessController@getCompanyCreate', 'as' => 'account-business-company-create'));
					/* Account business link to company (GET) */
					Route::get('link', array('uses' => 'BusinessController@getCompanyLink', 'as' => 'account-business-company-link'));
					/* Account business link to company (GET) */
					Route::get('activate/{invite_code}', array('uses' => 'BusinessController@getCompanyLinkActivate', 'as' => 'account-business-company-link-activate'));

					/* Account business create company (POST) */
					Route::post('create', array('uses' => 'BusinessController@postCompanyCreate', 'as' => 'account-business-company-create-post'));
					/* Account business link to company (POST) */
					Route::post('link', array('uses' => 'BusinessController@postCompanyLink', 'as' => 'account-business-company-link-post'));

					Route::group(array('middleware' => 'auth.company'), function()
					{
						/* Account business manage company (GET) */
						Route::get('{company}', array('uses' => 'BusinessController@getCompany', 'as' => 'account-business-company'));
						/* Account business manage user access (GET) */
						Route::get('{company}/users', array('uses' => 'BusinessController@getCompanyUsers', 'as' => 'account-business-company-users'));
						/* Account business company link new user (GET) */
						Route::get('{company}/users/create', array('uses' => 'BusinessController@getCompanyUserCreate', 'as' => 'account-business-company-users-create'));

						/* Account business company link new user (POST) */
						Route::post('{company}/users/create', array('uses' => 'BusinessController@postCompanyUserCreate', 'as' => 'account-business-company-users-create-post'));

						/* Account business company edit user (GET) */
						Route::get('{company}/users/{user}', array('uses' => 'BusinessController@getCompanyUserEdit', 'as' => 'account-business-company-user-edit'));

						/* Account business company edit user (POST) */
						Route::post('{company}/users/{user}', array('uses' => 'BusinessController@postCompanyUserEdit', 'as' => 'account-business-company-user-edit'));

						/* Account business company edit user - profile permissions (GET) */
						Route::get('{company}/users/{user}/profile/{profile}', array('uses' => 'BusinessController@getCompanyUserEditProfile', 'as' => 'account-business-company-user-edit-profile'));

						/* Account business company create profile (GET) */
						Route::get('{company}/profiles/create', array('uses' => 'BusinessController@getCompanyProfileCreate', 'as' => 'account-business-company-profiles-create'));
						/* Account business company create profile (GET) */
						Route::post('{company}/profiles/create', array('uses' => 'BusinessController@postCompanyProfileCreate', 'as' => 'account-business-company-profiles-create-post'));

						/* Account business company create profile (GET) */
						Route::get('{company}/profiles/{profile}', array('uses' => 'BusinessController@getCompanyProfileEdit', 'as' => 'account-business-company-profiles-edit'));

						/* Account business edit company profile (GET) */
						Route::get('{company}/edit-profile', array('uses' => 'BusinessController@getCompanyEdit', 'as' => 'account-business-company-edit'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing', array('uses' => 'BusinessController@getCompanyBilling', 'as' => 'account-business-company-billing'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-subscriptions', array('uses' => 'BusinessController@getCompanyBillingManageSubscriptions', 'as' => 'account-business-company-billing-manage-subscriptions'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-subscriptions/cancel/{source_id}', array('uses' => 'BusinessController@getCompanyBillingManageSubscriptionsCancelSubscription', 'as' => 'account-business-company-billing-manage-subscriptions-cancel-subscription'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-subscriptions/renew/{source_id}', array('uses' => 'BusinessController@getCompanyBillingManageSubscriptionsRenewSubscription', 'as' => 'account-business-company-billing-manage-subscriptions-renew-subscription'));

						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-cards', array('uses' => 'BusinessController@getCompanyBillingManageCards', 'as' => 'account-business-company-billing-manage-cards'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-cards/remove/{source_id}', array('uses' => 'BusinessController@getCompanyBillingManageCardsRemoveCard', 'as' => 'account-business-company-billing-manage-cards-remove-card'));
						/* Account business manage billing (GET) */
						Route::get('{company}/billing/manage-cards/default/{source_id}', array('uses' => 'BusinessController@getCompanyBillingManageCardsSetDefault', 'as' => 'account-business-company-billing-manage-cards-set-default'));
						
						/* Account business manage billing (GET) */
						Route::post('{company}/billing/manage-cards/create', array('uses' => 'BusinessController@getCompanyBillingManageCardsCreateCard', 'as' => 'account-business-company-billing-manage-cards-create-card'));

						/* Account business invoice retrieval (GET) */
						Route::get('{company}/billing/invoice/{inv}', function (Request $request, $company, $inv) {
						    return $request->user()->downloadInvoice($inv, [
						        'vendor'  => 'MHS',
						        'product' => 'Subscription',
						        'company' => $company
						    ]);
						});
						/* Account business company settings (GET) */
						Route::get('{company}/settings', array('uses' => 'BusinessController@getCompanySettings', 'as' => 'account-business-company-settings'));
						/* Account settings (POST) */
						Route::post('{company}/settings', array('uses' => 'BusinessController@postCompanySettings', 'as' => 'business-settings-post'));

						/* Account business company campaigns (GET) */
						Route::get('{company}/campaigns', array('uses' => 'BusinessController@getCompanyCampaigns', 'as' => 'account-business-company-campaigns'));
						/* Account business company banners (GET) */
						Route::get('{company}/banners', array('uses' => 'BusinessController@getCompanyBanners', 'as' => 'account-business-company-banners'));

						/* Account business company campaigns - view (GET) */
						Route::get('{company}/campaigns/{campaign}', array('uses' => 'BusinessController@getCompanyCampaignsView', 'as' => 'account-business-company-campaigns-view'));
						/* Account business company banners - view (GET) */
						Route::get('{company}/banners/{banner}', array('uses' => 'BusinessController@getCompanyBannersView', 'as' => 'account-business-company-banners-view'));

						/* Account business manage billing (GET) */
						Route::get('{company}/billing/payment', array('uses' => 'BusinessController@getCompanyMakePayment', 'as' => 'account-business-company-makepayment'));

					});
				});

			});

			Route::group([], function() {
			
				/* Account business activate (POST) */
				Route::post('business/activate', array('uses' => 'BusinessController@postActivate', 'as' => 'account-business-activate-post'));

				Route::post('business/link', array('uses' => 'BusinessController@postLink', 'as' => 'account-business-link-post'));
			
			});
			
			/* Account logout (GET) */
			Route::get('logout', array('uses' => 'AccountController@getLogout', 'as' => 'account-logout'));

		});

		/* Guest Routes */
		Route::group(array('middleware' => 'guest'), function()
		{
			
			/* Account login (GET) */
			Route::get('login', array('uses' => 'AccountController@getLogin', 'as' => 'account-login'));
			/* Account register (GET) */
			Route::get('register', array('uses' => 'AccountController@getRegister', 'as' => 'account-register'));

			Route::group(['prefix' => 'recovery'], function() {
				/* Account recovery (GET) */
				Route::get('/', array('uses' => 'AccountController@getRecovery', 'as' => 'account-recovery'));

				/* Account recovery - username (GET) */
				Route::get('username', array('uses' => 'AccountController@getRecoveryUsername', 'as' => 'account-recovery-username'));
				/* Account recovery - password (GET) */
				Route::get('password', array('uses' => 'AccountController@getRecoveryPassword', 'as' => 'account-recovery-password'));

				/* Account recovery - username (POST) */
				Route::post('username', array('uses' => 'AccountController@postRecoveryUsername', 'as' => 'account-recovery-username-post'));
				/* Account recovery - password (POST) */
				Route::post('password', array('uses' => 'AccountController@postRecoveryPassword', 'as' => 'account-recovery-password-post'));

				/* Account recovery - password - enter new password (GET) */
				Route::get('reset/{token}', array('uses' => 'AccountController@getResetPassword', 'as' => 'account-recovery-reset-password'));
				/* Account recovery - password - enter new password (POST) */
				Route::post('reset', array('uses' => 'AccountController@postResetPassword', 'as' => 'account-recovery-reset-password-post'));
			});
			
			/* Account login (POST) */
			Route::post('login', array('uses' => 'AccountController@postLogin', 'as' => 'account-login-post'));
			/* Account register (POST) */
			Route::post('register', array('uses' => 'AccountController@postRegister', 'as' => 'account-register-post'));
		});

		/* Account help (GET) */
		Route::get('help', array('uses' => 'AccountController@getHelp', 'as' => 'account-help'));	

	});

	/* PROMOTE ROUTES */
	Route::group(array('prefix' => 'promote'), function()
	{
		/* Promote your community (GET) */
		Route::get('communities', array('uses' => 'PromoteController@getPromoteCommunity', 'as' => 'promote-community'));
		/* Promote your professional (GET) */
		Route::get('professionals', array('uses' => 'PromoteController@getPromoteProfessional', 'as' => 'promote-professional'));
	});

	/* PROFILE ROUTES */
	Route::group(array('prefix' => 'profile'), function()
	{
		/*-----------------*/
		Route::pattern('profile', '[0-9]+');
		Route::model('profile', \App\Models\Profile::class);
		/*-----------------*/

		/* Profile (GET) */
		Route::get('{profile}', array('uses' => 'ProfileController@getIndex', 'as' => 'profile'));
		/* Profile send message page (GET) */
		Route::get('{profile}/message', array('uses' => 'ProfileController@getMessage', 'as' => 'profile-message'));

		/* Profile watch (GET) */
		//Route::get('{profile}/watch', array('uses' => 'ProfileController@getWatch', 'as' => 'profile-watch'));
		/* Profile watch (GET) */
		//Route::get('{profile}/kudos', array('uses' => 'ProfileController@getKudos', 'as' => 'profile-kudos'));

		Route::group([], function()
		{
			Route::group(array('middleware' => 'auth'), function()
			{
				/* Profile watch (POST) */
				Route::post('{profile}/watch', array('uses' => 'ProfileController@postWatch', 'as' => 'profile-cmd-watch-post'));
				/* Profile kudos (POST) */
				Route::post('{profile}/kudos', array('uses' => 'ProfileController@postKudos', 'as' => 'profile-cmd-kudos-post'));
			});
			/* Profile send message (POST) */
			Route::post('{profile}/message', array('uses' => 'ProfileController@postMessage', 'as' => 'profile-cmd-message-post'));
		});

		/* PROFILE EDITOR ROUTES */
		Route::group(array('prefix' => '{profile}/edit', 'middleware' => 'auth.profile:edit'), function()
		{
			/******************/
			Route::pattern('photo', '[0-9]+');
			
			Route::model('photo', \App\Models\ProfilePhoto::class);
			/******************/

			/* Profile editor (GET) */
			Route::get('/', array('uses' => 'EditorController@getIndex', 'as' => 'editor'));
			/* Profile editor photos (GET) */
			Route::get('photos', array('uses' => 'EditorController@getPhotos', 'as' => 'editor-photos'));

			Route::group([], function(){
				/* Profile editor (POST) */
				Route::post('/', array('uses' => 'EditorController@postIndex', 'as' => 'editor-post'));
				/* Profile editor (POST) */
				Route::post('photos', array('uses' => 'EditorController@postPhotos', 'as' => 'editor-photos-post'));
				/* Profile editor - upload photo (POST) */
				Route::post('photos/upload', array('uses' => 'EditorController@postUploadPhoto', 'as' => 'editor-photos-upload-post'));
				/* Profile editor - crop photo (POST) */
				Route::post('photos/crop', array('uses' => 'EditorController@postCropPhoto', 'as' => 'editor-photos-crop-post'));
				/* Profile editor - remove photo (POST) */
				Route::post('photos/remove', array('uses' => 'EditorController@postRemovePhoto', 'as' => 'editor-photos-remove-post'));
			});

			Route::group(array('middleware' => 'profiletype:community,editor'), function()
			{
				/******************/
				Route::pattern('space', '[0-9]+');
				Route::pattern('home', '[0-9]+');

				Route::model('space', \App\Models\Space::class);
				Route::model('home', \App\Models\Home::class);
				/******************/

				/* Profile editor remove (GET) */
				Route::get('remove', array('uses' => 'EditorController@getRemove', 'as' => 'editor-remove'));
				/* Profile editor spaces (GET) */
				Route::get('spaces', array('uses' => 'EditorController@getSpaces', 'as' => 'editor-spaces'));
				/* Profile editor homes (GET) */
				Route::get('homes', array('uses' => 'EditorController@getHomes', 'as' => 'editor-homes'));
				/* Profile editor map (GET) */
				Route::get('map', array('uses' => 'EditorController@getMap', 'as' => 'editor-map'));

				Route::post('homes/forms/{frm}', array('uses' => 'EditorController@getHomeForm', 'as' => 'editor-addhome'));

				/* Profile editor add home (GET) */
				Route::get('homes/new', array('uses' => 'EditorController@getAddHome', 'as' => 'editor-addhome'));
				/* Profile editor edit home (GET) */
				Route::get('homes/{home}', array('uses' => 'EditorController@getEditHome', 'as' => 'editor-edithome'));
				/* Profile editor edit home - photos (GET) */
				Route::get('homes/{home}/photos', array('uses' => 'EditorController@getEditHomePhotos', 'as' => 'editor-edithome-photos'));
				/* Profile editor edit home - ads (GET) */
				Route::get('homes/{home}/ads', array('uses' => 'EditorController@getEditHomeAds', 'as' => 'editor-edithome-ads'));

				Route::group([], function() {
					/* Profile editor remove (GET) */
					Route::post('remove', array('uses' => 'EditorController@postRemove', 'as' => 'editor-remove-post'));
					/* Profile editor add space (POST) */
					Route::post('spaces/new', array('uses' => 'EditorController@postAddSpace', 'as' => 'editor-addspace-post'));
					/* Profile editor edit space (POST) */
					Route::post('spaces/{space}', array('uses' => 'EditorController@postEditSpace', 'as' => 'editor-editspace'));
					/* Profile editor edit space (POST) */
					Route::post('spaces/{space}/remove', array('uses' => 'EditorController@postRemoveSpace', 'as' => 'editor-removespace'));

					/* Profile editor add home (POST) */
					Route::post('homes/new/dataio', array('uses' => 'EditorController@postHomeEditorIO', 'as' => 'editor-dataio-post'));
					/* Profile editor get home (GET) */
					Route::get('homes/new/dataio/{home}', array('uses' => 'EditorController@getHomeEditorIO', 'as' => 'editor-dataio-get'));


					/* Profile editor add home (POST) */
					Route::post('homes/new', array('uses' => 'EditorController@postAddHome', 'as' => 'editor-addhome-post'));
					/* Profile editor edit home (POST) */
					Route::post('homes/{home}', array('uses' => 'EditorController@postEditHome', 'as' => 'editor-edithome-post'));
					/* Profile editor edit home (POST) */
					Route::post('homes/{home}/photos', array('uses' => 'EditorController@postEditHomePhotos', 'as' => 'editor-edithome-photos-post'));
					/* Profile editor edit home (POST) */
					Route::post('homes/{home}/ads', array('uses' => 'EditorController@postEditHomeAds', 'as' => 'editor-edithome-ads-post'));
				});
			});
		});

	});

	/* COMPANY ROUTES */
	Route::group(array('prefix' => 'company'), function()
	{
		/*-----------------*/
		Route::pattern('company', '[0-9]+');
		Route::model('company', \App\Models\Company::class);
		/*-----------------*/

		/* Company (GET) */
		Route::get('{company}', array('uses' => 'CompanyController@getIndex', 'as' => 'company'));
		/* Company information (GET) */
		Route::get('{company}/info', array('uses' => 'CompanyController@getInfo', 'as' => 'company-info'));
		/* Company communities (GET) */
		Route::get('{company}/communities', array('uses' => 'CompanyController@getCommunities', 'as' => 'company-communities'));
		/* Company profiles (GET) */
		Route::get('{company}/profiles', array('uses' => 'CompanyController@getProfiles', 'as' => 'company-profiles'));

		Route::group([], function()
		{
			Route::group(array('middleware' => 'auth'), function()
			{
				/* Company watch (POST) */
				Route::post('{company}/watch', array('uses' => 'CompanyController@postWatch', 'as' => 'company-cmd-watch-post'));
				/* Company kudos (POST) */
				Route::post('{company}/kudos', array('uses' => 'CompanyController@postKudos', 'as' => 'company-cmd-kudos-post'));
			});
			/* Company send message (POST) */
			Route::post('{company}/message', array('uses' => 'CompanyController@postMessage', 'as' => 'company-cmd-message-post'));
		});


	});

	Route::group(array('prefix' => 'developers'), function()
	{
		/* Developers Home (GET) */
		Route::get('/', array('uses' => 'DeveloperController@getIndex', 'as' => 'developers'));
		
		Route::get('wiki', function() { return Redirect::to('wiki/Home'); });
		Route::get('wiki/{page}', array('uses' => 'WikiController@showPage', 'as' => 'wiki-page'));
		Route::get('docs', function() { return Redirect::to('docs/Start'); });
		Route::get('docs/{page}', array('uses' => 'DocsWikiController@showPage', 'as' => 'docs-page'));
	});

	Route::group(array('prefix' => 'search'), function()
	{
		/* Map search (GET) */
		Route::get('/', array('uses' => 'SearchController@getMapView', 'as' => 'search'));
		Route::post('/', array('uses' => 'SearchController@postMapView', 'as' => 'search-post'));
	});

	/* COMMUNITIES ROUTES */
	Route::group(array('prefix' => 'communities'), function()
	{
		/* Communities search (GET) */
		Route::get('/', array('uses' => 'SearchController@getCommunities', 'as' => 'communities'));
		/* Communities search (GET) */
		Route::get('/query', array('uses' => 'SearchController@getCommunitiesResults', 'as' => 'communities-query'));
		/* Communities search (POST) */
		Route::post('/', array('uses' => 'SearchController@postCommunities', 'as' => 'communities-post'));
	});

	/* HOMES ROUTES */
	Route::group(array('prefix' => 'homes'), function()
	{
		/* Homes search (GET) */
		Route::get('/', array('uses' => 'SearchController@getHomes', 'as' => 'homes'));
		/* Homes search (GET) */
		Route::get('/query', array('uses' => 'SearchController@getHomesResults', 'as' => 'homes-query'));
	});

	Route::group(array('prefix' => 'home'), function()
	{
		/*-----------------*/
		Route::pattern('home', '[0-9]+');
		Route::model('home', \App\Models\Home::class);
		/*-----------------*/

		/* Mobile Home (GET) */
		Route::get('{home}', array('uses' => 'HomeController@getIndex', 'as' => 'home'));
		/* Mobile Home contact seller (GET) */
		Route::post('{home}/contact', array('uses' => 'HomeController@ContactHomeSeller', 'as' => 'home-contact'));

		Route::group(array('middleware' => ['csrf', 'auth']), function()
		{
			/* Mobile Home watch (POST) */
			Route::post('{home}/watch', array('uses' => 'HomeController@postWatch', 'as' => 'home-cmd-watch-post'));
		});

		
		Route::group(array('middleware' => 'auth.home:{home}'), function()
		{
			/* Homes editor (GET) */
			Route::get('{home}/edit', array('uses' => 'EditorController@getEditHome', 'as' => 'editor-edithome'));

			Route::post('{home}/forms/{frm}', array('uses' => 'EditorController@getHomeForm', 'as' => 'editor-addhome'));

			Route::post('{home}/edit/dataio', array('uses' => 'EditorController@postHomeEditorIO', 'as' => 'editor-dataio-post'));
					/* Profile editor get home (GET) */
			Route::get('{home}/edit/dataio', array('uses' => 'EditorController@getHomeEditorIO', 'as' => 'editor-dataio-get'));

			/*new routes*/
				Route::post('{home}/edit/photos/upload', array('uses' => 'EditorController@postUploadHomePhoto', 'as' => 'home-editor-photos-upload-post'));
				/* Profile editor - crop photo (POST) */
				Route::post('{home}/edit/photos/crop', array('uses' => 'EditorController@postCropHomePhoto', 'as' => 'home-editor-photos-crop-post'));
		});

	});


	/* SPACES ROUTES */
	Route::group(array('prefix' => 'spaces'), function()
	{
		/* Spaces search (GET) */
		Route::get('/', array('uses' => 'SearchController@getSpaces', 'as' => 'spaces'));
		/* Spaces search (GET) */
		Route::get('/query', array('uses' => 'SearchController@getSpacesResults', 'as' => 'spaces-query'));
	});

	/* PROFESSIONALS ROUTES */
	Route::group(array('prefix' => 'pros'), function()
	{
		/*-----------------*/
		Route::pattern('professional', '[0-9a-zA-Z]+');
		Route::bind('professional', function($id, $route) {
			$ident = rand_uniqid($id, true, 6, 'derpy');
			$professional = \App\Models\Professional::find($ident);

		    if(!is_object($professional) || !is_a($professional, 'Professional')) {
		    	throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
		    }
		    return $professional;
		});
		/*-----------------*/

		/* Professionals search (GET) */
		Route::get('/', array('uses' => 'SearchController@getProfessionals', 'as' => 'professionals'));
		/* Professionals search (GET) */
		Route::get('/query', array('uses' => 'SearchController@getProfessionalsResults', 'as' => 'professionals-query'));
		/* Professionals - view profile */
		Route::get('/view/{professional}', array('uses' => 'ProfessionalController@getProfile', 'as' => 'professionals-view'));
	});

	/* OCTAVIA API ROUTES */
	Route::group(array('prefix' => 'octavia'), function()
	{
		/* Fetch cities in map viewport (POST:JSON) */
		Route::post('cities', array('uses' => 'OctaviaController@postFetchCities'));
		/* Fetch communities in map viewport (POST:JSON) */
		Route::post('communities', array('uses' => 'OctaviaController@postFetchCommunities'));
		/* Fetch location to redirect map viewport (POST:JSON) */
		Route::post('location', array('uses' => 'OctaviaController@postFetchLocation'));
		/* Fetch homes in map viewport (POST:JSON) */
		Route::post('homes', array('uses' => 'OctaviaController@postFetchHomes'));
		/* Fetch homes in map viewport (POST:JSON) */
		Route::post('spaces', array('uses' => 'OctaviaController@postFetchSpaces'));
		/* Fetch data in map viewport */
		//Route::get('geojson', array('uses' => 'OctaviaController@getFetchForEsri'));
		/* Fetch location to redirect map viewport (POST:JSON) */
		Route::post('contact', array('uses' => 'OctaviaController@postSendMessage'));

		/* ============================= STRIPE WEBHOOK URL ============================= */
		Route::post('webhook_2a5f958340523d72eb591c3861b7edca', array('uses' => 'OctaviaController@postProcessIncomingStripeWebhook'));
		/* ==============================================================================*/
	});

	/* DERPY API ROUTES */
	Route::group(array('prefix' => 'derpy'), function()
	{
		Route::pattern('profiletype', '(community|salesagent|dealer|manufacturer|transporter|contractor|insurer|inspector|lender|remodeler|professional)');

		/* Get states (GET:JSON) */
		Route::get('amenities', array('uses' => 'DerpyController@getAmenities'));
		/* Get states (GET:JSON) */
		Route::get('companies', array('uses' => 'DerpyController@getCompanies'));
		Route::get('companies/{company_name}/{company_id}', array('uses' => 'DerpyController@getCompanies'));
		/* Get states (GET:JSON) */
		Route::get('communities', array('uses' => 'DerpyController@getCommunities'));
		Route::get('communities/{company_name}/{company_id}', array('uses' => 'DerpyController@getCommunities'));
		/* Get states (GET:JSON) */
		Route::get('states', array('uses' => 'DerpyController@getStates'));
		/* Get cities by state (GET:JSON) */
		Route::get('cities/{state}', array('uses' => 'DerpyController@getCitiesByState'));
		/* Get cities by county (GET:JSON) */
		Route::get('cities/{state}/{county}', array('uses' => 'DerpyController@getCitiesByCounty'));
		/* Get cities in general (GET:JSON) */
		Route::get('cities', array('uses' => 'DerpyController@getCities'));
		/* Get neighboring cities by radial distance (GET:JSON) */
		Route::get('radius', array('uses' => 'DerpyController@getRadius'));
		/* Get counties by state (GET:JSON) */
		Route::get('counties/{state}', array('uses' => 'DerpyController@getCounties'));
		/* Get regions by state (GET:JSON) */
		Route::get('regions/{state}', array('uses' => 'DerpyController@getRegions'));
		/* Get profile (GET:JSON) */
		Route::get('profile/{id}', array('uses' => 'DerpyController@getProfile'));

		Route::group([], function()
		{
			Route::group(array('middleware' => 'auth'), function()
			{
				/* Watch (POST:JSON) */
				Route::post('watch/{relation}/{id}', array('uses' => 'DerpyController@postWatch'));
				/* Kudos (POST:JSON) */
				Route::post('kudos/{relation}/{id}', array('uses' => 'DerpyController@postKudos'));
				/* Send Message (POST:JSON) */
				Route::post('message/{relation}/{id}', array('uses' => 'DerpyController@postMessage'));
				/* Get profile (POST:JSON) */
				Route::post('profileform/{profiletype}', array('uses' => 'DerpyController@postProfileForm'));
				/* Get home forms (POST:JSON) */
				Route::post('homeform/{formname}', array('uses' => 'DerpyController@postHomeForm'));
			});

			Route::group(array('middleware' => 'auth.profile'), function() {
				/*-----------------*/
				Route::pattern('photo', '[0-9]+');
			
				Route::model('photo', \App\Models\ProfilePhoto::class);
				/*-----------------*/


				/* Get space information (GET:JSON) */
				Route::get('business/profile/{profile}/space/{space}', array('uses' => 'DerpyController@getBusinessSpace'));
				/* Save space information (POST:JSON) */
				Route::post('business/profile/{profile}/space/{space}', array('uses' => 'DerpyController@postBusinessSpace'));
				/* Remove space (POST:JSON) */
				Route::post('business/profile/{profile}/space/{space}/remove', array('uses' => 'DerpyController@postBusinessSpaceRemove'));

			});
		});
	});

	/* PAYMENTS API ROUTES */
	Route::group(array('prefix' => 'payments'), function()
	{
		Route::group([], function()
		{
			Route::group(array('middleware' => 'auth'), function()
			{
				Route::post('process/{company_id}', array('uses' => 'PaymentsController@store'));
			});
		});
	});

	/* Static page (GET) */
	Route::get('page/{slug}', array('uses' => 'PageController@getSlug', 'as' => 'page'));

	/* Static page (GET) */
	Route::get('help/{slug}', array('uses' => 'PageController@getHelp', 'as' => 'help'));


	/* Promotional Links */
	Route::get('sell-a-mobile-home', array('uses' => 'PageController@getHomeOwnerPromo', 'as' => 'sell-promo'));
	Route::get('buy-a-mobile-home', array('uses' => 'PageController@getHomeBuyerPromo', 'as' => 'buy-promo'));
	Route::get('promote-mobile-home-park', array('uses' => 'PageController@getParkOwnerPromo', 'as' => 'community-promo'));
	Route::get('mobile-home-sales-agent', array('uses' => 'PageController@getSalesAgentPromo', 'as' => 'salesagent-promo'));

	Route::get('sell', function() { return redirect()->route('sell-promo'); });
	Route::get('buy', function() { return redirect()->route('buy-promo'); });
	Route::get('salesagent', function() { return redirect()->route('salesagent-promo'); });
	Route::get('parkowner', function() { return redirect()->route('community-promo'); });

	/* Homepage (GET) */
	Route::get('promotest', array('uses' => 'WelcomeController@getPromo', 'as' => 'test-promo'));

	/* Homepage (GET) */
	Route::get('/', array('uses' => 'WelcomeController@getIndex', 'as' => 'welcome'));

	// $app->bind('WikiController', function($app) {
	// 	$repository = new WikipageRepository;
	// 	$repository->setDatapath(base_path() . '/wiki');

	// 	return new WikiController($repository);
	// });

	// $app->bind('DocsWikiController', function($app) {
	// 	$repository = new WikipageRepository;
	// 	$repository->setDatapath(base_path() . '/docs');

	// 	return new WikiController($repository);
	// });


	Route::get('404', array('uses' => 'ErrorController@getNotFound', 'as' => 'error-not-found'));

//});


//Route::get('/', 'WelcomeController@index');

//Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


	//Get started
	Route::group(array('prefix' => 'getstarted'), function()
	{
		Route::get('', function (Request $request) {
			return view::make("pages.getstarted");
		});
	});

	Route::group(array('prefix' => 'getstarted/community'), function()
	{

		Route::get('', array('uses' => 'GetStartedCommunityController@getIndex', 'as' => 'getstarted-community'));
		Route::post('', array('uses' => 'GetStartedCommunityController@postUserForm', 'as' => 'getstarted-community-post'));
		Route::get('clearsession', array('uses' => 'GetStartedCommunityController@clearSession', 'as' => 'getstarted-community-clear-session'));
		Route::get('free', array('uses' => 'GetStartedCommunityController@getFree', 'as' => 'getstarted-community-free'));
		Route::get('premium', array('uses' => 'GetStartedCommunityController@getPremium', 'as' => 'getstarted-community-premium'));
		Route::post('checkgeo', array('uses' => 'GetStartedCommunityController@postCheckGeo', 'as' => 'getstarted-community-checkgeo'));
		Route::post('confirmorder', array('uses' => 'GetStartedCommunityController@postOrderConfirmation', 'as' => 'getstarted-community-confirmorder'));
		Route::post('submitpayment', array('uses' => 'GetStartedCommunityController@postSubmitPayment', 'as' => 'getstarted-community-submitpayment'));

		Route::get('upgrade', array('uses' => 'GetStartedCommunityController@getUpgrade', 'as' => 'getstarted-community-upgrade'));
	});

	Route::group(array('prefix' => 'getstarted/home'), function()
	{

		Route::get('', array('uses' => 'GetStartedHomeController@getIndex', 'as' => 'getstarted-home'));
		Route::post('', array('uses' => 'GetStartedHomeController@postUserForm', 'as' => 'getstarted-home-post'));
		Route::get('clearsession', array('uses' => 'GetStartedHomeController@clearSession', 'as' => 'getstarted-home-clear-session'));
		Route::get('free', array('uses' => 'GetStartedHomeController@getFree', 'as' => 'getstarted-home-free'));
		Route::get('premium', array('uses' => 'GetStartedHomeController@getPremium', 'as' => 'getstarted-home-premium'));
		Route::post('checkgeo', array('uses' => 'GetStartedHomeController@postCheckGeo', 'as' => 'getstarted-home-checkgeo'));
		Route::post('confirmorder', array('uses' => 'GetStartedHomeController@postOrderConfirmation', 'as' => 'getstarted-home-confirmorder'));
		Route::post('submitpayment', array('uses' => 'GetStartedHomeController@postSubmitPayment', 'as' => 'getstarted-home-submitpayment'));

	});

	/* Support System
	*/
	Route::group(array('prefix' => 'support'), function()
	{
		/*-----------------*/
		//Route::pattern('company', '[0-9]+');
		//Route::model('company', \App\Models\Company::class);
		/*-----------------*/

		/* Create Ticket (GET) */
		Route::get('createticket', array('uses' => 'TicketSystemController@getIndex', 'as' => 'tickets'));

		Route::group([], function()
		{
			Route::group(array('middleware' => 'auth'), function()
			{
				/* Company watch (POST) */
				Route::post('{company}/watch', array('uses' => 'CompanyController@postWatch', 'as' => 'company-cmd-watch-post'));
				/* Company kudos (POST) */
				Route::post('{company}/kudos', array('uses' => 'CompanyController@postKudos', 'as' => 'company-cmd-kudos-post'));
			});
			/* Company send message (POST) */
			Route::post('{company}/message', array('uses' => 'CompanyController@postMessage', 'as' => 'company-cmd-message-post'));
		});


	});