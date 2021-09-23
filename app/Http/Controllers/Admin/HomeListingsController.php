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
use DB;
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
use App\Models\ListingVoucher;
use Image;
use URL;
use App\Upload;
use Imagick;


use App\Models\DiskStatus;
use App\Models\Server;

class HomeListingsController extends Pony {
	


	public function getIndex()
	{

		$timeframe = self::getTimeFrame();
		//dd($timeframe);
		$goals = self::getGoals($timeframe->type); 
		$homes = Home::whereBetween("created_at", [$timeframe->start, $timeframe->end])->get();
		return view('admin.homes.index')
					->with('title', 'Home Listings Dashboard')
					->with('homes', $homes)
					->with('total_homes', Home::where('status', 1)->count())
					->with('homes_views', 0)
					->with('goals', $goals)
					->with('menutitle', 'Dashboard Menu');
	}

	public function getSettings()
	{
		return view('admin.homes.settings')
					->with('title', 'Home Listings Dashboard')
					->with('menutitle', 'Dashboard Menu');
	}

	private function getTimeFrame() {
		if ( Input::exists("timeframe") ) {
			switch ( Input::get("timeframe") ) {
				case 'day':
					$start = date("m/d/y 00:00:00", strtotime("today"));
					$end   = date("m/d/y 23:59:59", strtotime("today"));
					return (object)['type'=> "day", 'start'=> $start, 'end'=> $end];
				break;
				case 'week':
					$start = date("m/d/y 00:00:00", strtotime("monday"));
					$end   = date("m/d/y 23:59:59", strtotime("sunday"));
					return (object)['type'=> "week", 'start'=> $start, 'end'=> $end];
				break;
				case 'month':
					$start = date("m/d/y 00:00:00", strtotime("first day of this month"));
					$end   = date("m/d/y 23:59:59", strtotime("last day of this month"));
					return (object)['type'=> "month", 'start'=> $start, 'end'=> $end];
				break;
				case 'year':
					$year = date("Y");
					$start = date("m/d/y 00:00:00", strtotime("01/01/".$year." 00:00:00"));
					$end   = date("m/d/y 23:59:59", strtotime("12/31/".$year." 11:59:59"));
					return (object)['type'=> "year", 'start'=> $start, 'end'=> $end];
				break;
				case 'all-time':
					$year = date("Y");
					$start = date("m/d/y 00:00:00", strtotime("01/01/2019 00:00:00"));
					$end   = date("m/d/y 23:59:59", strtotime("12/31/".$year." 11:59:59"));
					return (object)['type'=> "all-time", 'start'=> $start, 'end'=> $end];
				break;
				default:
				break;
			}

		} elseif ( Input::exists("start_time") && Input::exists("end_time") ) {
			return ['type'=>"custom", 'start'=>Input::exists("start_time") , 'end'=>Input::exists("end_time")];
		} else {
			$start = date("m/d/y 00:00:00", strtotime("today"));
			$end   = date("m/d/y 23:59:59", strtotime("today"));
			return (object)['type'=> "day", 'start'=> $start, 'end'=> $end];
		}
	}

	private function getGoals($term) {
		switch( $term ) {
			case "day": 		return (object)['type'=>'day', 'units'=>1,'revenue'=>39.99,'active'=>10,'views'=>150,]; break;
			case "week": 		return (object)['type'=>'week', 'units'=>5,'revenue'=>200,'active'=>5,'views'=>900,]; break;
			case "month": 		return (object)['type'=>'month', 'units'=>20,'revenue'=>800,'active'=>20,'views'=>4000,]; break;
			case "year": 		return (object)['type'=>'year', 'units'=>60,'revenue'=>2400,'active'=>30,'views'=>150000,]; break;
			case "all-time": 	return (object)['type'=>'whole damn time', 'units'=>30000,'revenue'=>1000000,'active'=>10000,'views'=>10000,]; break;
			default: 			return (object)['type'=>'err', 'units'=>0,'revenue'=>0,'active'=>0,'views'=>0,]; break;
		}
	}

	public function getVoucher($code)
	{

		$voucher = ListingVoucher::byCode($code);
		return view('admin.homes.voucher')
					->with('title', 'Home Listings Dashboard')
					->with('voucher', $voucher)
					->with('menutitle', 'Dashboard Menu');
	}


	public function getVouchers()
	{ 
		DB::table('listing_vouchers')
            ->whereIn('status', [0,1])
            ->where('expires_at', '<', Carbon::now())
            ->update(['status' => "-1"]);

		$vouchers = (object)[];
		$vouchers->available = ListingVoucher::where("status", 0)->get();
		$vouchers->pending   = ListingVoucher::where("status", 1)->get();
		$vouchers->claimed   = ListingVoucher::where("status", 2)->get();
		$vouchers->invalid   = ListingVoucher::where("status", -1)->get();


		return view('admin.homes.vouchers')
					->with('title', 'Home Listings Dashboard')
					->with('vouchers', $vouchers)
					->with('menutitle', 'Dashboard Menu');
	}

	public function postVoucher($code)
	{ 
		$input_data = Input::only('voucher_code', 'voucher_customer', 'voucher_notes');

		$validator = Validator::make($input_data,
		[
			'voucher_code' => 'required|exists:listing_vouchers,code',
			'voucher_notes' => 'max:750',
		],
		[
			'voucher_notes.max' => 'Limit notes to 750 characters or less.',
		]);

		if($validator->fails()) {
			return Redirect::route('admin-homes-voucher', ['code'=>$code])
							->withInput()
							->withErrors($validator);
		}else{
			$success = false;
			$voucher = ListingVoucher::byCode($code);

			if ( $voucher->is_open == false ) {
				$validator = Validator::make($input_data, ['voucher_customer' => 'required|numeric|exists:companies,id']);
				if($validator->fails()) {
					return Redirect::route('admin-homes-voucher', ['code'=>$code])
							->withInput()
							->withErrors($validator);
				}
			}


			if( $voucher->company_id == null ) {
				if( $voucher->expires_at > Carbon::now() ) {
					$voucher->company_id = $input_data['voucher_customer'];
					$voucher->notes = $input_data['voucher_notes'];
					$voucher->status = 1;
					if( $voucher->save() ) {
						$success = true;
					} else {
						$error = "Sorry, an unexpected error occured.";
					}
				} else {
					$error = "Sorry, this voucher has already expired and can no longer be assigned.";
				}
			} else {
				$voucher->notes = $input_data['voucher_notes'];
				if( $voucher->save() ) {
					$success = true;
				}
			}

			if( $success ) {
				return Redirect::route('admin-homes-voucher-post', ['code' => $code])
							->withSuccess("Voucher has been updated.");
			} else {
				return Redirect::route('admin-homes-voucher-post', ['code' => $code])
							->withErrors([$error]);
			}

		}

	}


	public function postVouchers()
	{
		$input_data = Input::only('voucher_type', 'voucher_term', 'voucher_units', 'voucher_exp_date', 'voucher_open');

		$validator = Validator::make($input_data,
		[
			'voucher_type' => 'required|in:1',
			'voucher_term' => 'required|numeric|between:1,180',
			'voucher_units' => 'required|numeric|between:1,50',
			'voucher_exp_date' => 'required|date|after:tomorrow',
			'voucher_open' => 'required|in:0,1',
		],
		[
			'voucher_term.between' => 'The term must be between 1 and 180 day(s)',
			'voucher_units.between' => 'The number of vouchers to create must be between 1 and 50',
			'voucher_exp_date.after' => 'Voucher expirations can be no sooner than the day after tomorrow',
			'length.numeric' => 'The space dimensions are invalid.',
		]);
		if($validator->fails()) {
			return Redirect::route('admin-homes-vouchers')
							->withInput()
							->withErrors($validator);
		}else{
			self::generateHomeVouchers($input_data['voucher_type'], $input_data['voucher_units'], $input_data['voucher_term'], $input_data['voucher_exp_date'], $input_data['voucher_open']);
			return Redirect::route('admin-homes-vouchers')
								->withSuccess("{$input_data['voucher_units']} Voucher(s) Created.");
			//return self::getVouchers();
		}

	}

	private function generateHomeVouchers($type, $amount, $term, $exp, $open) {

		for( $v=0; $v<$amount; $v++ ) {
			$c = 0;
			$r_code = strtoupper(str_random(5));
			while( ListingVoucher::byCode($r_code)->count() > 0 ) {
				$r_code = strtoupper(str_random(5));
				$c++;
			}

			$next_voucher = new ListingVoucher;
			$next_voucher->code = $r_code;
			$next_voucher->product_term = $term;
			$next_voucher->status = 0;
			$next_voucher->publisher_id = Auth::user()->id;
			$next_voucher->expires_at = Carbon::parse($exp);
			$next_voucher->is_open = $open;
			$next_voucher->save();
		}
	}

	public function pruneVouchers($status)
	{ 

		switch ($status) {
			case 'invalid':
				DB::table('listing_vouchers')
	            	->where('status', '-1')
	            	->whereNull('deleted_at')
	            	->update(['deleted_at' => Carbon::now()]);

				DB::table('listing_vouchers')
	            	->where('status', '>=', '3')
	            	->whereNull('deleted_at')
	            	->update(['deleted_at' => Carbon::now()]);

	            return Redirect::route('admin-homes-vouchers', ['view'=>$status])
						->withSuccess("Vouchers have been pruned.");

			break;
			case 'claimed':
				DB::table('listing_vouchers')
	            	->where('status', 2)
	            	->whereNull('deleted_at')
	            	->update(['deleted_at' => Carbon::now()]);
	            return Redirect::route('admin-homes-vouchers', ['view'=>$status])
						->withSuccess("Vouchers have been pruned.");

			break;
			default:
				return Redirect::route('admin-homes-vouchers', ['view'=>$status])
						->withInput()
						->withErrors(['Error pruning vouchers. Invalid prune type.']);

			break;
		}

	}

}