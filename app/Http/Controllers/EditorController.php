<?php namespace App\Http\Controllers;

//use Auth;
use App\Models\Canvas;
use Config;
use App\Models\Geoname;
use App\Models\Home;
use Input;
use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\Profile;
use App\Models\ProfilePhoto;
use Response;
use Redirect;
use Validator;
use Image;
use Guzzle\Http\Client as GuzzleClient;
use Phaza\LaravelPostgis\Geometries\Point;
use App\Upload;
use Imagick;
use URL;
use App\Models\Amenities;
use Geocodio;

class EditorController extends Pony {

	public function getIndex(Profile $profile)
	{
		/* Just here to play with the api...
		
		$fields = [];
		$key = '10c5a094ff51dfcffc0ff85fccf14d4fd000fcf';
		$data = Geocodio::get('341 Wildwood Canyon Rd, Yucaipa, CA', $fields, $key);
		return response()->json($data);
		*/

		$amenities = Amenities::where('visible', true)->orderBy("order")->take(16)->get();
		return view('editor.home')
					->with('profile', $profile)
					->with('amenities', $amenities)
					->with('plan', $profile->plan);
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
		return view('editor.partials.forms.'.$frm)
					->with('profile', $profile)
					->with('plan', $profile->plan);
					//->with('canvas', Canvas::getDefault());
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

			'senior' => 'boolean',
			'gated' => 'boolean',
			'pets' => 'boolean',

			'rec' => 'boolean',
			'pool' => 'boolean',
			'basketball' => 'boolean',
			'tennis' => 'boolean',
			'shuffleboard' => 'boolean',
			'bingo' => 'boolean',
			'picnic' => 'boolean',
			'playground' => 'boolean',
			'fitness' => 'boolean',

			'fishing' => 'boolean',
			'golf' => 'boolean',
			'gambling' => 'boolean',
			'hiking' => 'boolean',
			'horsies' => 'boolean',
			'shopping' => 'boolean',

			'description' => '',

			'space_count' => 'numeric',
			'rent' => '',
			'phone' => 'phone:US',
			'fax' => 'phone:US',
			'address' => '',
			'city' => 'required_with:address',
			'state' => 'required_with_all:city,address',
			'zipcode' => 'numeric',
		],
		[
			'' => ''
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

			/* Update space count and rent */
			if($profile->spaces != Input::get('space_count', 0)) {
				$profile_array['spaces'] = (Input::get('space_count', 0) < 1000) ? Input::get('space_count') : 0;
			}

			$rent = Input::get('rent', '');
			if($profile->rent != e($rent)) {
				if(is_numeric($rent) && $rent > 0 && $rent < 10000) {
					$profile_array['rent'] = $rent;
				}elseif(!is_numeric($rent)){
					$profile_array['rent'] = e($rent);
				}else{
					$profile_array['rent'] = '';
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

			/* Address check */
			if($profile->address != Input::get('address') || $profile->city != Input::get('city') || $profile->zipcode != Input::get('zipcode')) {
				$address = trim(Input::get('address').', '.Input::get('city').', '.Input::get('state').' '.Input::get('zipcode'));
				
				$guz = new GuzzleClient('https://maps.googleapis.com/maps/api');
				$req = $guz->get('geocode/json?key='.Config::get('services.google.api.server_key').'&address='.urlencode($address));
				$geocode_data = $req->send()->json();

				/* Address validation / preparation */
				if($geocode_data['status'] == 'OK') {
					$street_number = '';
					$route = '';
					$city = '';
					$state = '';
					$zipcode = '';
					$county = '';

					$components = $geocode_data['results'][0]['address_components'];

					/* Pull whatever valid info we can */
					foreach($components as $component) {
						if(in_array('street_number', $component['types'])) {
							$street_number = $component['short_name'];
						}elseif(in_array('route', $component['types'])) {
							$route = $component['short_name'];
						}elseif(in_array('locality', $component['types'])) {
							$city = $component['short_name'];
						}elseif(in_array('administrative_area_level_1', $component['types'])) {
							$state = $component['short_name'];
						}elseif(in_array('postal_code', $component['types'])) {
							$zipcode = $component['short_name'];
						}elseif(in_array('administrative_area_level_2', $component['types'])) {
							$county = $component['short_name'];
						}
					}

					/* Update city, state, address */
					if($city != '' && strlen($state) == 2) {
						$city_lookup = Geoname::searchPlaces($city.', '.$state);
						if(is_object($city_lookup[0])) {
							if($street_number != '' && $route != '') {
								$profile->address = $street_number.' '.$route;
							}
							$profile_array['city_id'] = $city_lookup[0]->id;
							$profile_array['state_id'] = $city_lookup[0]->state_id;
						}
					}

					/* Update zipcode */
					if(strlen($zipcode) == 5) {
						$profile_array['zipcode'] = $zipcode;
					}

				} /* End of Address preparation */
			}/* End of Address check */

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


			/* Save! */
			$profile->update($profile_array);

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
		//$input_data = Input::all();
		/*bookmark:anthony -- workaround below */
		$home->city = "Yucaipa";
		$home->state = "CA";
		return $home;
	}

	public function postHomeEditorIO(Profile $profile, Home $home) {
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
	        $home->city_id 		= (int)150965769;
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
			
			$home->address 		= (string)$input_data['address'];
			$home->state_id 	= (string)$input_data['state_id'];
			$home->zipcode 		= (string)$input_data['zipcode'];
			$home->space_number = (string)$input_data['space'];

			$home->photos 		  = (string)json_encode($input_data['photos']); //need to merge all 3 to json obj !!!
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