<?php

use Illuminate\Http\Request;
use App\Models\Geoname;
use App\Models\State;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(array('prefix' => 'latest'), function()
{
	Route::get('homes', array('uses' => 'DerpyController@getLatestHomes', 'as' => 'homes-all'));
	Route::get('homes/{zip}', array('uses' => 'DerpyController@getLatestHomes', 'as' => 'homes-zip'));

});



/*************************************
	Everything below I was using
	when I started implementing
	geocodio.. then kage took over..
	not sure if any of this is used?
**************************************/
Route::group(array('prefix' => 'geotools'), function()
{
	/*
		Still working on all of this..
	*/
	Route::get('lookup/{state}/{city}/{zip}/{q}', function ($state, $city, $zip, $q) {
		if ( !$zip && !$state ) { return response()->json([]); }
		$fields = [];
		$key = '10c5a094ff51dfcffc0ff85fccf14d4fd000fcf';
		$data = Geocodio::get("{$q}, {$city} {$state} {$zip}", $fields, $key);
		$nd = Array();
		$memo = Array();
		foreach( $data->response->results as $result ) {
			if (!in_array($result->formatted_address, $memo) && 
				isset($result->address_components->number)
			){
				$nd[] = $memo = array('title'=>$result->formatted_address);
			}
		}
		return response()->json($nd);
	});

	Route::get('addrcords', function () {
		$fields = [];
		$addr = Request::get("addr");
		$key = '10c5a094ff51dfcffc0ff85fccf14d4fd000fcf';
		$data = Geocodio::get($addr, $fields, $key);
		return response()->json($data);
	});


	Route::get('detailzip/{zip}', function ($zip) {
		$fields = [];
		$key = '10c5a094ff51dfcffc0ff85fccf14d4fd000fcf';
		$data = Geocodio::get($zip, $fields, $key);
		$nd = Array();
		$memo = Array();
		$clean_data = Array();

		/* Clean geocodio response..*/
		foreach ($data->response->results as $result ) {
			if (!in_array($result->formatted_address, $memo)) {
				$memo[] = $result->formatted_address;

				$state_id = State::where("abbr", strtolower($result->address_components->state))->first();
				$mhsdata = Geoname::where("place_name", $result->address_components->city)
									->where("state_id", $state_id->id)
									->first();
				$nd[] = array(
					'zip'    => $result->address_components->zip,
					'city'   => $result->address_components->city,
					'county' => $result->address_components->county,
					'state'  => $result->address_components->state,
					'title'  => $result->formatted_address,
					'latitude'   => $result->location->lat,
					'longitude'  => $result->location->lng,
					'city_id' => (int)$mhsdata->osm_id,
					'state_id' => $state_id->id,
					'county_id' => $mhsdata->place_name,
				);
			}
		}


		return response()->json($nd);

	});

});