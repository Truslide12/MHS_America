<?php namespace App\Http\Controllers;

//use Auth;
use Log;
use Config;
use Input;
use Illuminate\Http\Request;
use Response;
use Redirect;
use Validator;
use Image;
use Auth;
use Guzzle\Http\Client as GuzzleClient;
use Phaza\LaravelPostgis\Geometries\Point;
use App\Upload;
use Imagick;
use URL;
use App\Models\Canvas;
use App\Models\Geoname;
use App\Models\Home;
use App\Models\Space;
use App\Models\State;
use App\Models\Profile;
use App\Models\Amenities;
use App\Models\ProfilePhoto;
use Geocoder;
use Illuminate\Database\Eloquent\Model as Eloquent;

class EditorController extends Pony {

	public function getIndex(Profile $profile)
	{

		$states = State::orderBy('id', 'asc')->get();
		$amenities = Amenities::where('visible', true)->orderBy("order")->take(16)->get();

		//$business_hours = '1:8,18|5:9,14|7:x';
		$business_hours = $profile->getHours();
		$hour_sets = array_filter(explode('|', $business_hours), 'strlen');
		$final_hours = [];

		if(count($hour_sets) > 0) {

			$stored_days = [0];
			$cur_hours = ['open' => '', 'close' => ''];
			for ($i=1; $i < 8; $i++) {
				for ($j=0; $j < count($hour_sets); $j++) { 
					list($day, $hours) = explode(':', $hour_sets[$j]);

					if ($day == $i) {
						if($hours == 'x') {
							$start = 48;
							$end = 48;
						}else{
							list($start, $end) = explode(',', $hours);
						}
						$cur_hours = ['open' => $start, 'close' => $end];
					}
				}
				$stored_days[$i] = $cur_hours;
			}
			$final_hours = $stored_days;
		}

		$hour_texts = array(
			'12:00am', //0
			'1:00am',
			'2:00am',
			'3:00am',
			'4:00am',
			'5:00am',
			'6:00am',
			'7:00am',
			'8:00am',
			'9:00am',
			'10:00am',
			'11:00am',

			'12:00pm',
			'1:00pm',
			'2:00pm',
			'3:00pm',
			'4:00pm',
			'5:00pm',
			'6:00pm',
			'7:00pm',
			'8:00pm',
			'9:00pm',
			'10:00pm',
			'11:00pm', //23

			'12:30am', //24
			'1:30am',
			'2:30am',
			'3:30am',
			'4:30am',
			'5:30am',
			'6:30am',
			'7:30am',
			'8:30am',
			'9:30am',
			'10:30am',
			'11:30am',

			'12:30pm',
			'1:30pm',
			'2:30pm',
			'3:30pm',
			'4:30pm',
			'5:30pm',
			'6:30pm',
			'7:30pm',
			'8:30pm',
			'9:30pm',
			'10:30pm',
			'11:30pm', //47
			'' //48
		);

		$weekdays = [
			0,
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday',
			'Sunday'
		];

		return view('editor.home')
					->with('profile', $profile)
					->with('amenities', $amenities)
					->with('states', $states)
					->with('plan', $profile->plan)
					->with('business_hours', $final_hours)
					->with('hour_texts', $hour_texts)
					->with('weekdays', $weekdays);
					//->with('canvas', Canvas::getDefault());
	}

	public function getSpaces(Profile $profile)
	{
		return view('editor.spaces')
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->with('spaces', $profile->spaces()->get());
					//->with('canvas', Canvas::getDefault());
	}

	public function getPhotos(Profile $profile)
	{
		return view('editor.photos')
					->with('profile', $profile)
					->with('photos', $profile->photos()->get())
					->with('plan', $profile->plan);
					//->with('canvas', Canvas::getDefault());
	}

	public function getHomes(Profile $profile)
	{
		return view('editor.homes')
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->with('homes', $profile->homes);
					//->with('canvas', Canvas::getDefault());
	}

	public function getMap(Profile $profile)
	{
		return view('editor.map')
					->with('profile', $profile)
					->with('plan', $profile->plan);
					//->with('canvas', Canvas::getDefault());
	}

	public function getAddHome(Profile $profile)
	{
		return view('editor.homenew')
					->with('profile', $profile)
					->with('plan', $profile->plan);
					//->with('canvas', Canvas::getDefault());
	}

	public function getHomeForm(Profile $profile, $frm)
	{
		$x = view('editor.partials.forms.'.$frm)
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->render();
					//->with('canvas', Canvas::getDefault());

		return Response::json(array('success' => true, 'error' => false, 'data' => $x), 200);
	}

	public function getEditHome(Profile $profile, Home $home)
	{

		//Use same editor now..
		//return view('editor.homeedit')
		return view('editor.homenew')
					->with('profile', $profile)
					->with('plan', $profile->plan)

					->with('home', $home);
					//->with('canvas', Canvas::getDefault());
	}

	public function getEditHomePhotos(Profile $profile, Home $home)
	{
		return view('editor.homeeditphotos')
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->with('home', $home)
					->with('act_new', (Input::get('context') == 'new') );
					//->with('canvas', Canvas::getDefault());
	}

	public function postEditHomePhotos(Profile $profile, Home $home)
	{
		//DO BACKEND PROCCESSING.. MOVE TO NEXT STEP..
		//bookmark:Anthony
		return view('editor.homeeditphotos')
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->with('home', $home)
					->with('act_new', (Input::get('context') == 'new') );
					//->with('canvas', Canvas::getDefault());
	}

	public function getEditHomeAds(Profile $profile, Home $home)
	{
		return view('editor.homeeditads')
					->with('profile', $profile)
					->with('plan', $profile->plan)
					->with('home', $home)
					->with('act_new', (Input::get('context') == 'new') );
					//->with('canvas', Canvas::getDefault());
	}

	public function postIndex(Profile $profile)
	{
		$validator = Validator::make(Input::all(),
		[
			'title' => 'required',
			'pets' => 'boolean',
			'description' => 'string|max:500|nullable',
			'space_count' => 'numeric',
			'rent' => '',
			'phone' => 'phone:US|nullable',
			'fax' => 'phone:US|nullable',
			'address' => 'required',

			'city' => 'required|exists:places,id',
			'state' => 'required|exists:states,id',
			
			'zipcode' => 'numeric|max:99999',
			'community_type' => 'numeric|between:0,2',
			'utility_water' => 'numeric|between:0,2|nullable',
			'utility_sewer' => 'numeric|between:0,2|nullable',
			'utility_gas' => 'numeric|between:0,2|nullable',
		],
		[
			'title.required' => 'Community name is required',
			'description.max' => 'Description must be under 500 characters',
			'space_count.numeric' => 'Total space count is not a number',

			'phone.phone' => 'Phone number is invalid',
			'fax.phone' => 'Fax number is invalid',
			'address.required' => 'Street address is required',
			
			'city.required' => 'City is required',
			'city.exists' => 'Error looking up city',
			'state.required' => 'State is required',
			'state.exists' => 'Error looking up state',

			'zipcode.numeric' => 'Zip code is invalid',
			'zipcode.max' => 'Zip code is invalid',
			'community_type.numeric' => 'Community type not selected',
			'community_type.between' => 'Community type not selected',
			'utility_water.numeric' => 'Error linking to utilities options in database',
			'utility_sewer.numeric' => 'Error linking to utilities options in database',
			'utility_gas.numeric' => 'Error linking to utilities options in database',
			'utility_water.between' => 'Error linking to utilities options in database',
			'utility_sewer.between' => 'Error linking to utilities options in database',
			'utility_gas.between' => 'Error linking to utilities options in database'
		]);

		if($validator->fails()) {
			return Redirect::route('editor', ['profile' => $profile->id, 'from_company' => $profile->company_id])
							->withErrors($validator);
		}else{
			$profile_array = [];
			/* Update title */
			if($profile->title != Input::get('title')) {
				$profile_array['title'] = Input::get('title');
			}

			/*Age type*/
			if($profile->age_type != Input::get('community_type')) {
				$profile_array['age_type'] = Input::get('community_type');
			}

			/*Description*/
			if($profile->description != Input::get('description')) {
				$profile_array['description'] = Input::get('description');
			}

			/* Update space count and rent */
			if($profile->spaces != Input::get('space_count', 0)) {
				$profile_array['spaces'] = (Input::get('space_count', 0) < 1000) ? Input::get('space_count') : 0;
			}


			/* Update amenity */
			if($profile->amenities != Input::get('amenityinp')) {
				$profile_array['amenities'] = json_encode(["has" => str_getcsv(Input::get('amenityinp'))]);
			}


			$rent = Input::get('rent', 0);
			if($profile->rent != $rent) {
				if(is_numeric($rent) && $rent > 0 && $rent < 10000) {
					$profile_array['rent'] = $rent;
				}else{
					$profile_array['rent'] = 0;
				}
			}

			/* Validate and update phone and fax */
			$phone = preg_replace('/[^0-9]/', '', Input::get('phone',''));
			if(strlen($phone) == 10) {
				$profile_array['phone'] = $phone;
			}

			$fax = preg_replace('/[^0-9]/', '', Input::get('fax',''));
			if(strlen($fax) == 10) {
				$profile_array['fax'] = $fax;
			}

			/* Utilities */
			$profile_array['utilities'] = json_encode(array(Input::get('utility_water', 0), Input::get('utility_sewer', 0), Input::get('utility_gas', 0)));

			$hours_array = [];
			$open_times = Input::get('open_hours');
			$close_times = Input::get('close_hours');
			$curr = '';

			for ($i=1; $i < 8; $i++) {
				$hourchunk = (in_array('x', [ $open_times[$i], $close_times[$i] ])) ? ( (count($hours_array) > 0) ? '48,48' : '' ) : $open_times[$i].','.$close_times[$i];
				if($curr != $hourchunk ) {
					$hours_array[] = $i.':'.$hourchunk;
					$curr = $hourchunk;
				}
			}

			if(count($hours_array) > 0) {
				$profile_array['tagline'] = implode('|', $hours_array);
			}else{
				$profile_array['tagline'] = '';
			}

			/* Update checkboxes */
			$bools = [
				'senior','gated','pets',
				'rec','pool','basketball',
				'tennis','shuffleboard',
				'picnic','playground','fitness',
				'fishing','golf','hiking',
				'horsies','shopping'
			];

			foreach($bools as $val) {
				$profile_array[$val] = Input::get($val, false) ? 1 : 0;
			}

			/* Address change */
			$geocoding = false;
			if(Input::get('address') != $profile->address || Input::get('addressb') != $profile->addressb || Input::get('city') != $profile->city_id || Input::get('state') != $profile->state_id || Input::get('zipcode') != $profile->zipcode || $profile->county_id == 0) {

				/** 
				 * Geocoding helper
				 * see App\Models\Support\Geocoder
				 **/
				$geocode = Geocoder::address(
					Input::get('address'),
					Input::get('addressb'),
					Input::get('city'),
					Input::get('state'),
					Input::get('zipcode'),
					$profile
				);
				$geocoding = $geocode['success'];

			}

			/* Save! */
			if($geocoding) {
				$profile->update(array_merge($profile_array, $geocode['data']));
			}else{
				$profile->update($profile_array);
			}

			return Redirect::route('editor', ['profile' => $profile->id, 'from_company' => $profile->company_id])
							->with('success', 'Profile changes saved.');

		}
	}

	public function postAddSpace(Profile $profile)
	{
		$input_data = Input::only('title', 'size', 'width', 'length', 'taken');

		$validator = Validator::make($input_data,
		[
			'title' => 'required',
			'size' => 'required|numeric|between:1,4',
			'width' => 'numeric',
			'length' => 'numeric',
			'taken' => 'in:0,1'
		],
		[
			'title.required' => 'The space name is required.',
			'title.between' => 'The space name must be between 1 and 6 characters.',
			'size' => 'You must select the size (-wide) of a suitable house.',
			'width.numeric' => 'The space dimensions are invalid.',
			'length.numeric' => 'The space dimensions are invalid.',
			'taken.in' => ''
		]);
		if($validator->fails()) {
			return Redirect::route('editor-addspace', ['profile' => $profile->id])
							->withInput()
							->withErrors($validator);
		}else{
			$space = new Space;

			$space->profile_id = $profile->id;
			$space->name = Input::get('title');
			$space->is_taken = (Input::get('taken', 0) == 1);
			$space->width = Input::get('width', '');
			$space->length = Input::get('length', '');
			$space->shape = Input::get('size', 1);
			$space->city_id = $profile->city_id;
			if($space->save()) {
				return Redirect::route('editor-spaces', ['profile' => $profile->id])
								->with('success', 'Vacant space listed successfully.');
			}

			$error = new Illuminate\Support\MessageBag(['error' => 'An error occurred. Code: EDSP01']);
			return Redirect::route('editor-addspace', ['profile' => $profile->id])
							->withInput()
							->withErrors($error);
		}
	}

	public function postEditSpace(Profile $profile, Space $space)
	{
		$input_data = Input::only('title', 'size', 'width', 'length', 'taken');

		$validator = Validator::make($input_data,
		[
			'title' => 'required|between:1,6',
			'size' => 'required|numeric|between:1,4',
			'width' => 'numeric',
			'length' => 'numeric',
			'taken' => 'in:0,1'
		],
		[
			'title.required' => 'The space name is required.',
			'title.between' => 'The space name must be between 1 and 6 characters.',
			'size' => 'You must select the size (-wide) of a suitable house.',
			'width.numeric' => 'The space dimensions are invalid.',
			'length.numeric' => 'The space dimensions are invalid.',
			'taken.in' => 'Invalid input for home taken.'
		]);
		if($validator->fails()) {
			return Redirect::route('editor-editspace', ['profile' => $profile->id, 'space' => $space->id])
							->withInput()
							->withErrors($validator);
		}else{
			$space->title = $input_data['title'];
			$space->is_taken = (Input::get('taken', 0) == 1);
			$space->width = $input_data['width'];
			$space->length = $input_data['length'];
			$space->size = $input_data['size'];

			if($space->save()) {
				return Redirect::route('editor-spaces', ['profile' => $profile->id])
								->with('success', 'The space was successfully updated.');
			}

			$error = new Illuminate\Support\MessageBag(['error' => 'An error occurred. Code: EDSP01']);
			return Redirect::route('editor-editspace', ['profile' => $profile->id, 'space' => $space->id])
							->withInput()
							->withErrors($error);
		}
	}

	public function postAddHome(Profile $profile)
	{
		$input_data = Input::only('title', 'price', 'type', 'beds', 'baths', 'size', 'width', 'length', 'description');

		$validator = Validator::make($input_data,
		[
			'title' => 'regex:/^[A-Za-z0-9\-! ,\'\"\/@\.:\(\)]+$/',
			'price' => 'required|regex:/^\$?[0-9,]+$/',
			'type' => 'required|numeric|in:0,1',
			'beds' => 'required|numeric|between:1,5',
			'baths' => 'required|numeric|between:1,4',
			'size' => 'required|in:1,2,3,4',
			'width' => 'numeric',
			'length' => 'numeric',
			'description' => ''
		],
		[
			'title.regex' => 'The title contains invalid characters.',
			'price.regex' => 'The price contains invalid characters.',
			'price.required' => 'The price is required.',
			'type.required'=> 'You must select for sale or for rent.',
			'type.numeric' => 'The listing type contains invalid characters.',
			'type.in' => 'Invalid input in the listing type.',
			'beds.required' => 'Please select the bedroom count.',
			'beds.numeric' => 'The bedroom count contains invalid characters.',
			'beds.between' => 'The bedroom count contains invalid characters.',
			'baths.required' => 'Please select the bathroom count.',
			'baths.numeric' => 'The bathroom count contains invalid characters.',
			'baths.between' => 'The bathroom count contains invalid characters.',
			'size.required' => 'Please select the size of the home.',
			'size.in' => 'The home size contains invalid characters.',
			'width.numeric' => 'The home dimensions contain invalid characters.',
			'length.numeric' => 'The home dimensions contain invalid characters.'
		]);

		if($validator->fails()) {
			return Redirect::route('editor-addhome', ['profile' => $profile->id])
							->withInput()
							->withErrors($validator);
		}else{
			$home = new Home;
			$home->timestamps = false;

			$home->profile_id = $profile->id;
			$home->title = $input_data['title'];
			$home->price = preg_replace('/[^0-9]/', '', $input_data['price']);
			$home->for_rent = $input_data['type'];
			$home->beds = $input_data['beds'];
			$home->baths = $input_data['baths'];
			$home->shape = $input_data['size'];
			$home->width = $input_data['width'];
			$home->length = $input_data['length'];
			$home->city_id = $profile->city_id;
			$home->description = trim($input_data['description']) ? trim($input_data['description']) : '';
			$home->location = $profile->geoname->geometry;

			//$home->expires_at = \Carbon\Carbon::now()->addDays(90);

			//$home->company_id = $company->id;

			if($home->save()) {
				return Redirect::route('editor-edithome-photos', ['profile' => $profile->id, 'home' => $home->id, 'context' => 'new'])
								->with('success', 'The information was saved to the listing.');
			}

			return Redirect::route('editor-addhome', ['profile' => $profile->id])
							->withInput()
							->withErrors(new \Illuminate\Support\MessageBag(['error' => 'Something went wrong while placing the data in the database. Try again in a few minutes.']));
		}
	}

	public function postEditHome(Profile $profile, Home $home)
	{
		$input_data = Input::only('title', 'price', 'type', 'beds', 'baths', 'size', 'width', 'length');

		$validator = Validator::make($input_data,
		[
			'title' => 'regex:/^[A-Za-z0-9\-! ,\'\"\/@\.:\(\)]+$/',
			'price' => 'required|regex:/^\$?[0-9,]+$/',
			'type' => 'required|numeric|in:0,1',
			'beds' => 'required|numeric|between:1,5',
			'baths' => 'required|numeric|between:1,4',
			'size' => 'required|in:1,2,3,4',
			'width' => 'numeric',
			'length' => 'numeric',
		],
		[
			'title.regex' => 'The title contains invalid characters.',
			'price.regex' => 'The price contains invalid characters.',
			'price.required' => 'The price is required.',
			'type.required'=> 'You must select for sale or for rent.',
			'type.numeric' => 'The listing type contains invalid characters.',
			'type.in' => 'Invalid input in the listing type.',
			'beds.required' => 'Please select the bedroom count.',
			'beds.numeric' => 'The bedroom count contains invalid characters.',
			'beds.between' => 'The bedroom count contains invalid characters.',
			'baths.required' => 'Please select the bathroom count.',
			'baths.numeric' => 'The bathroom count contains invalid characters.',
			'baths.between' => 'The bathroom count contains invalid characters.',
			'size.required' => 'Please select the size of the home.',
			'size.in' => 'The home size contains invalid characters.',
			'width.numeric' => 'The home dimensions contain invalid characters.',
			'length.numeric' => 'The home dimensions contain invalid characters.'
		]);

		if($validator->fails()) {
			return Redirect::route('editor-edithome', ['profile' => $profile->id, 'home' => $home->id])
							->withInput()
							->withErrors($validator);
		}else{
			$home->timestamps = false;

			$home->profile_id = $profile->id;
			$home->title = $input_data['title'];
			$home->price = preg_replace('/[^0-9]/', '', $input_data['price']);
			$home->for_rent = $input_data['type'];
			$home->beds = $input_data['beds'];
			$home->baths = $input_data['baths'];
			$home->shape = $input_data['size'];
			$home->width = $input_data['width'];
			$home->length = $input_data['length'];

			if($home->save()) {
				return Redirect::route('editor-edithome', ['profile' => $profile->id, 'home' => $home->id])
								->with('success', 'Your changes have been saved to the listing.');
			}

			return Redirect::route('editor-edithome', ['profile' => $profile->id, 'home' => $home->id])
							->withInput()
							->withErrors(new \Illuminate\Support\MessageBag(['error' => 'Something went wrong while placing the data in the database. Try again in a few minutes.']));
		}
	}

	public function postUploadPhoto(Request $request, Image $image)
	{

		$imageTypes = array('image/jpeg', 'image/png');
		if(Input::hasFile('img') && in_array(Input::file('img')->getMimeType(), $imageTypes)) {
			$name = time().'_'.md5(file_get_contents(Input::file('img')->getRealPath()));
			$image = Image::make(Input::file('img'));
			$response = array(
				'status' => 'success',
				'url' => URL::route('welcome') . '/imgstorage/cover_'.$name.'_orig.jpg',
				'width' => $image->width(),
				'height' => $image->height()
			);

			$image->save('imgstorage/cover_'.$name.'_orig.jpg');


			//$me = Auth::user();
			//$me->avatar = 'uploads/avatar_'.$name.'_orig.jpg';

			//$me->save();

			return Response::json($response);
		}else{
			return Response::json(array('status' => 'error', 'message' => 'Image invalid or absent. JPEG and PNG accepted.'));
		}
	}

	public function postCropPhoto(Profile $profile) /* COPYPASTA FROM PONYCRUSH */
	{
		ini_set('memory_limit', '-1');
		$imgPath = Input::get('imgUrl');
		$imgPath = explode("imgstorage/", $imgPath)[1];

		$newPath = 'imgstorage/cover_'.md5($imgPath).'_crop.jpg';
		$smPath = 'imgstorage/cover_'.md5($imgPath).'_sm.jpg';
		//return $imgPath;
		$g = Image::make(public_path("imgstorage/".$imgPath));

		$multiple = 2.5;
		$calc_width = intval(floor(Input::get('imgW')*$multiple));
		$calc_height = intval(floor(Input::get('imgH')*$multiple));

		//Resize image to size
		$g->resize($calc_width, $calc_height);

		//Rotate image
		$angle = Input::get('rotation');
		$g->rotate(-$angle);

		//Crop rotated picture back into confined area
		$rot_width = $g->width();
		$rot_height = $g->height();

		$diff_width = $rot_width - $calc_width;
		$diff_height = $rot_height - $calc_height;

		$g->crop( $calc_width, $calc_height, intval(floor($diff_width / 2)), intval(floor($diff_height / 2)) );

		//Crop that image to user's liking
		$g->crop( intval(floor(Input::get('cropW')*$multiple)), intval(floor(Input::get('cropH')*$multiple)), intval(floor(Input::get('imgX1')*$multiple)), intval(floor(Input::get('imgY1')*$multiple)) );

		$g->save($newPath);

		$g->resize(48, 48);

		$g->save($smPath);

		$coverPhoto = new ProfilePhoto;
		$coverPhoto->cover = md5($imgPath);
		/*why is this breaking it
		$coverPhoto->original = substr($imgPath, 18, 43);
		*/
		$coverPhoto->profile_id = $profile->id;
		$coverPhoto->user_id = 0;
		$coverPhoto->is_avatar = false;
		$coverPhoto->cover_position = '';
		$coverPhoto->title = '';

		if($coverPhoto->save()) {
			return Response::json(array('status' => 'success', 'url' => URL::route('welcome')."/".$newPath));
		}

		return Response::json(array('status' => 'error', 'message' => 'Failed to upload cropped image.'));
	}

	public function postRemovePhoto(Profile $profile)
	{
		$photo_id = Input::get('photo_id');

		$photo = ProfilePhoto::find($photo_id);
		$photo_name = 'imgstorage/cover_'.$photo->cover.'_crop.jpg';
		$photo_name_sm = 'imgstorage/cover_'.$photo->cover.'_sm.jpg';
		$photo_original = 'imgstorage/cover_'.$photo->original.'_orig.jpg';

		if(is_object($photo) && $photo->delete())
		{
			if(file_exists($photo_name)) unlink($photo_name);
			if(file_exists($photo_name_sm)) unlink($photo_name_sm);
			if(file_exists($photo_original)) unlink($photo_original);
			return Response::json(['success' => true, 'data' => ['id' => $photo_id] ]);
		}

		return Response::json(['success' => false]);
	}

	public function postUploadHomePhoto()
	{
		$imageTypes = array('image/jpeg', 'image/png');
		if(Input::hasFile('img') && in_array(Input::file('img')->getMimeType(), $imageTypes)) {
			$name = time().'_'.md5(file_get_contents(Input::file('img')->getRealPath()));
			$image = Image::make(Input::file('img'));
			$response = array(
				'status' => 'success',
				'url' => '/imgstorage/home_'.$name.'_orig.jpg',
				'width' => $image->width(),
				'height' => $image->height()
			);

			$image->save('imgstorage/home_'.$name.'_orig.jpg');


			//$me = Auth::user();
			//$me->avatar = 'uploads/avatar_'.$name.'_orig.jpg';

			//$me->save();

			return Response::json($response);
		}else{
			return Response::json(array('status' => 'error', 'message' => 'Image invalid or absent. JPEG and PNG accepted.'));
		}
	}

	public function postCropHomePhoto(Profile $profile, Home $home)
	{
		ini_set('memory_limit', '-1');
		$imgPath = Input::get('imgUrl');
		$newPath = 'imgstorage/home_'.md5($imgPath).'_crop.jpg';
		$smPath = 'imgstorage/home_'.md5($imgPath).'_sm.jpg';
		$g = Image::make(substr($imgPath,1));

		$multiple = 2.5;
		$calc_width = intval(floor(Input::get('imgW')*$multiple));
		$calc_height = intval(floor(Input::get('imgH')*$multiple));

		//Resize image to size
		$g->resize($calc_width, $calc_height);

		//Rotate image
		$angle = Input::get('rotation');
		$g->rotate(-$angle);

		//Crop rotated picture back into confined area
		$rot_width = $g->width();
		$rot_height = $g->height();

		$diff_width = $rot_width - $calc_width;
		$diff_height = $rot_height - $calc_height;

		$g->crop( $calc_width, $calc_height, intval(floor($diff_width / 2)), intval(floor($diff_height / 2)) );

		//Crop that image to user's liking
		$g->crop( intval(floor(Input::get('cropW')*$multiple)), intval(floor(Input::get('cropH')*$multiple)), intval(floor(Input::get('imgX1')*$multiple)), intval(floor(Input::get('imgY1')*$multiple)) );

		$g->save($newPath);

		$g->resize(48, 48);

		$g->save($smPath);

		$coverPhoto = new HomePhoto;
		$coverPhoto->cover = md5($imgPath);
		$coverPhoto->home_id = $home->id;
		//$coverPhoto->user_id = 0;
		//$coverPhoto->is_avatar = false;

		if($coverPhoto->save()) {
			return Response::json(array('status' => 'success', 'url' => '/'.$newPath));
		}

		return Response::json(array('status' => 'error', 'message' => 'Failed to upload cropped image.'));
	}

	public function getHomeEditorIO(Profile $profile, Home $home) {
		//needs update for shared homes
		foreach ( Auth::user()->companies as $company ) {
			if ( $company->id == $home->company_id ) {

				//state_id
				//city_id

				$p = Profile::where('id', $home->profile_id)->first();
				$s = State::where('id', $p->state_id)->first();
				$home->city = $p->city->place_name;
				$home->state = strtoupper($s->abbr);

				//$home->zipcode = $p->;
				//$home->address = $p->;
				return json_encode(array("status"=>true, "data"=>$home));
			}
		}

		return json_encode(array("status"=>false, "data" => []));

	}

	public function postHomeEditorIO(Profile $profile, Home $home) {

		//needs update for shared homes
		foreach ( Auth::user()->companies as $company ) {
			if ( $company->id == $home->company_id ) {
				return json_encode(array("status"=>fail));
			}
		}


		$input_data = Input::all();

		//for debug
		//return json_encode($input_data);

		//$home->community_id = ;

		if ( $input_data['home_id'] == null ) {
			//new
	        $home = new Home;
			$home->price 		= (int)$input_data['price'];
			$home->beds 		= (int)$input_data['bedrooms'];
			$home->baths 		= (int)$input_data['bathrooms'];
			$home->title 		= (string)$input_data['title'];
			$home->width 		= (int)$input_data['dimensions']['width'];
			$home->length 		= (int)$input_data['dimensions']['length'];
			$home->shape 		= (int)$input_data['size'];
			$home->status 		= 1;
	        $home->location     = "0101000020E61000003605323B8B3E5DC0D4F59F90F8F64040";
	        $home->profile_id 	= $profile->id;
			$home->description 	= (string)$input_data['description'];
	        $home->city_id 		= (int)$input_data['city_id'];
			$home->serial 		= (string)json_encode($input_data['serial']); //need to merge all 3 to json obj !!!
			$home->decal 		= (string)json_encode($input_data['decal']); //need to merge all 3 to json obj !!!
			$home->hud 			= (string)json_encode($input_data['hud']); //need to merge all 3 to json obj !!!
			
			if($home->save()) {
				return json_encode(array("status"=>true, "home_id"=>$home->id));
			} else {
				return json_encode(array("status"=>fail));
			}

		} else if ( (int)$input_data['home_id'] > 0 ) {
			//save
	        $home = Home::where('id', $input_data['home_id'])->first();
	        //return $input_data;
			$home->price 		= (int)$input_data['price'];
			$home->beds 		= (int)$input_data['bedrooms'];
			$home->baths 		= (int)$input_data['bathrooms'];
			$home->title 		= (string)$input_data['headline'];
			$home->width 		= (int)$input_data['dimensions']['width'];
			$home->length 		= (int)$input_data['dimensions']['length'];
			$home->shape 		= (int)$input_data['size'];
			$home->status 		= 1;
	        $home->city_id 		= (int)150965769;
	        $home->location     = "0101000020E61000003605323B8B3E5DC0D4F59F90F8F64040";
	        $home->profile_id = $profile->id;
			$home->description 	= (string)$input_data['description'];
			$home->year 		= (int)$input_data['year'];
			$home->brand 		= (string)$input_data['make'];
			$home->model 		= (string)$input_data['model'];
			$home->serial 		= (string)json_encode($input_data['serial']); //need to merge all 3 to json obj !!!
			$home->image_floorplan 	= 1;//$input_data['photos']['floorplan'];
			$home->image_backdrop 	= 1;//$input_data['photos']['backdrop'];
			//$home->location 	= $input_data['location']; //not sure what this original column was for??
			$home->specs 		= json_encode($input_data['specs']);
			$home->type 		= (int)$input_data['sale_type'];
			$home->decal 		= (string)json_encode($input_data['decal']); //need to merge all 3 to json obj !!!
			$home->hud 			= (string)json_encode($input_data['hud']); //need to merge all 3 to json obj !!!
			
			/*now is simply kept from time of profile 
			purchase and based on attached community
			$home->address 		= (string)$input_data['address'];
			$home->state_id 	= (string)$input_data['state_id'];
			$home->zipcode 		= (string)$input_data['zipcode'];
			*/
			$home->space_number = (string)$input_data['space'];


			if( array_key_exists("photos", $input_data) ) {
			  $home->photos 		  = (string)json_encode($input_data['photos']); //need to merge all 3 to json obj !!!
			}

			$home->square_footage = (int)$input_data['dimensions']['square_footage'];
			$home->dims_json 	  = (string)json_encode($input_data['dimensions']['json']);
			$home->offsets 		  = (int)$input_data['dimensions']['offsets'];

			$home->sold_price 	  = (int)$input_data['sold_price'];
			$home->exp_date 	  = date("Y-m-d H:i:s", strtotime($input_data['exp_date']));;
			


			if( array_key_exists('home_options', $input_data) ) {
				if( array_key_exists('features', $input_data['home_options']) ) {
					$home->features 	= (string)json_encode($input_data['home_options']['features']); //need to turn array into JSON !!!
				}
				if( array_key_exists('appliances', $input_data['home_options']) ) {
					$home->appliances 	= (string)json_encode($input_data['home_options']['appliances']); //need to turn array into JSON !!!
				}
			}
			
			$home->status 		= 1;
	        $home->city_id 		= (int)150965769;
	        $home->location     = "0101000020E61000003605323B8B3E5DC0D4F59F90F8F64040";
	        $home->profile_id = $profile->id;

			if($home->save()) {
				return json_encode(array("status"=>true, "home_id"=>$home->id));
			} else {
				return json_encode(array("status"=>fail));
			}

		}

	}

}