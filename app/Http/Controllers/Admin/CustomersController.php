<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Illuminate\Support\MessageBag;
use Auth;
use Redirect;
use Request;
use Response;
use Input;
use Validator;
use View;
use Carbon\Carbon;

use App\Models\Page;
use App\Models\News;

use App\Models\Company;
use App\Models\Profile;
use App\Models\Home;

use App\Models\Partner;
use App\Models\PartnerApps;
use App\Models\PartnerAdPlacement;
use App\Models\PartnerAdTypes;
use App\Models\PartnerAdBlock;
use App\Models\PartnerAdvertisement;
use App\Models\PartnerCampaign;

use Image;
use URL;
use App\Upload;
use Imagick;


use App\Models\DiskStatus;
use App\Models\Server;

class CustomersController extends Pony {
	


	public function getIndex()
	{
		return view('admin.customers.index')
					->with('title', 'Content')
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCustomers()
	{
		$now = strtotime("last monday");
		$now = date("m/d/y H:i:s", $now);
		return view('admin.customers.customers')
					->with('title', 'Content')
					->with('companies', Company::where('is_personal', false)->where("created_at", ">", $now)->get() )
					->with('pbas', Company::where('is_personal', true)->where("created_at", ">", $now)->get() )
					->with('now', $now)
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCompanyAccounts()
	{
		return view('admin.customers.company-accounts')
					->with('title', 'Content')
					->with('accounts', Company::where('is_personal', false)->orderBy("id")->get() )
					->with('menutitle', 'Dashboard Menu');
	}

	public function getPersonalAccounts()
	{
		return view('admin.customers.personal-accounts')
					->with('title', 'Content')
					->with('accounts', Company::where('is_personal', true)->orderBy("id")->get() )
					->with('menutitle', 'Dashboard Menu');
	}

	public function getAccount($id)
	{
		switch( Input::get('view') ) {
			case "homes":
				$view = "admin.customers.account-homes";
			break;
			case "profiles":
				$view = "admin.customers.account-profiles";
			break;
			case "users":
				$view = "admin.customers.account-users";
			break;
			default:
				$view = "admin.customers.account-details";
			break;
		}

		return view($view)->with('title', 'Content')->with('menutitle', 'Dashboard Menu')
											  ->with('account', Company::where('id', $id)->firstOrFail() );

	}

	public function postGiftHome($id)
	{

		$validator = Validator::make(Request::all(),
			array(
				'account-id' => 'required|numeric|min:1',
				'community-id' => 'required|numeric|min:1',
				'space-number' => 'required'
			)
		);

		if($validator->fails()) {
			Input::flash();
			return view('admin.customers.account-homes')
					->with('title', 'Content')
					->withErrors($validator)
					->with('account', Company::where('id', $id)->firstOrFail() )
					->with('menutitle', 'Dashboard Menu');
		}

		if($id != Input::get('account-id') ) {
			Input::flash();
			return view('admin.customers.account-homes')
					->with('title', 'Content')
					->withErrors(['smoke break'])
					->with('account', Company::where('id', $id)->firstOrFail() )
					->with('menutitle', 'Dashboard Menu');
		}

		$company_id = $id;
		$community = Profile::where('id', Input::get('community-id'))->firstOrFail();
		$space_number = Input::get('space-number');

		//create the home...
		$new_home = new Home;
		$new_home->city_id 			= $community->city_id;
		$new_home->title 			= '';
		$new_home->profile_id 		= $community->id;	/*of community?*/
		$new_home->status 			= 1;
		$new_home->beds 			= 0;
		$new_home->baths	 		= 0;
		$new_home->dims_json 		= json_encode([]);
		$new_home->seller_info 		= json_encode([]);
		$new_home->address 			= $community->address;
		$new_home->zipcode 			= $community->zipcode;
		$new_home->state_id 		= $community->state_id;
		$new_home->description 		= "";
		$new_home->location 		= $community->location;
		$new_home->space_number 	= $space_number;
		$new_home->specs 			= '{"siding":"0","skirting":"0","roof_angle":"0","roof_mat":"0","windows":"0","wall_thickness":"0","kitchen_floor":"0","floor":"0","setup":"0","strap":"0"}';
		$new_home->seller_info 		= '{"company":null,"name":null,"phone":null,"addr":null,"email":null,"license":null,"promo":{"type":"0","param1":null,"param2":null,"param3":null}}';
		$new_home->photos 			= "{}";
		$new_home->features 		= "[]";
		$new_home->appliances 		= "[]";
		$new_home->serial 			= "[null,null,null]";
		$new_home->decal 			= "[null,null,null]";
		$new_home->hud 				= "[null,null,null]";
		$new_home->exp_date 		=  Carbon::now()->addDays(180);
		$new_home->company_id 		= $company_id;

		if( ! $new_home->save() ) {
			Input::flash();
			return view('admin.customers.account-homes')
					->with('title', 'Content')
					->withErrors(['smoke break'])
					->with('account', Company::where('id', $id)->firstOrFail() )
					->with('menutitle', 'Dashboard Menu');
		} else {

			return redirect()->route('admin-customer-edit', array('id' => $id ))
							->withSuccess('Home was gifted.');
		}
		


	}

	public function getCustomerLookup()
	{
		return view('admin.customers.lookup')
					->with('title', 'Content')
					->with('menutitle', 'Dashboard Menu');
	}

}