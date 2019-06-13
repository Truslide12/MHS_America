<?php

use Illuminate\Http\Request;

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

Route::group(array('prefix' => 'geotools'), function()
{
	/*
		Still working on all of this..
	*/
	Route::get('lookup/{state}/{zip}/{q}', function ($state, $zip, $q) {
		if ( !$zip && !$state ) { return response()->json([]); }
		$fields = [];
		$key = '10c5a094ff51dfcffc0ff85fccf14d4fd000fcf';
		$data = Geocodio::get("{$q}, {$state}, {$zip}", $fields, $key);
		$nd = Array();
		$memo = Array();
		foreach( $data->response->results as $result ) {
			if (!in_array($result->formatted_address, $memo) && 
				isset($result->address_components->number)
			){
				$nd[] = array('title'=>$result->formatted_address);
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


});