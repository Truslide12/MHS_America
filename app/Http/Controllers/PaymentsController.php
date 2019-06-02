<?php namespace App\Http\Controllers;

//use Api\Profile as ProfileAPI;
use Auth;
use App\Models\City;
use App\Models\County;
use App\Models\Company;
use Exception;
use Input;
use App\Models\Profile;
use App\Models\Home;
use App\Models\Space;
use Response;
use App\Models\State;
//use ZipCode;
use App\Models\Geoname;
use DB;
use View;
use Illuminate\Http\Request;

class PaymentsController extends Pony {

	public static $watchTypes = array(
		'profile',
		'company',
		'space',
		'home'
	);

	protected function jsonAPI($data, $http_status = 200, $json_type = null)
	{
		$json_opts = (Input::get('format', '') == 'pretty') ? JSON_PRETTY_PRINT : 0;
		$output_array = ['success' => true, 'data' => $data];
		return Response::json($output_array, $http_status, [], $json_opts)->withHeaders(['Content-Type' => 'application/vnd.api+json']);
	}

	protected function store(Request $request, $company_id)
	{
		//change to save to business intead of user:
		//


		//need to pass plan paramater here
		
        $this->validate($request, ['stripeToken' => 'required']);
        $metadata = ["order_type"=>"Subscription","company"=>$company_id];
        $request->user()->newSubscription('mhs_plan_d', 'mhs_plan_d')
        				->withMetadata($metadata)
                        ->create($request->input('stripeToken'));

        return redirect()->route('account-business-company-billing', array('company' => $company_id))->withSuccess('You are now subscribed.');
	}

	protected function error_out($msg)
	{
		return response("<strong>error:</strong> ".$msg, 200)->header('Content-Type', 'text/html');
	}

}