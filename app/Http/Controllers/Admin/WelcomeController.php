<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Illuminate\Support\MessageBag;
use Auth;
use Redirect;
use Request;
use Response;
use Input;
use Validator;
use App\Models\Profile;
use View;
use App\Models\Page;
use App\Models\News;
use App\Models\CommunitySpotlight;
use App\Models\Amenities;
use App\Models\DiskStatus;
use App\Models\Server;

class WelcomeController extends Pony {
	
	public function getIndex()
	{
		return view('admin.welcome')
					->with('title', 'Dashboard');
	}

	public function getLogin()
	{
		return view('admin.login')
					->with('title', 'Login');
	}

	public function getMessages()
	{
		return view('admin.messages')
					->with('title', 'Messages')
					->with('menutitle', 'Dashboard Menu');
	}

	public function getPages()
	{
		return view('admin.content-pages')
					->with('title', 'Content')
					->with('pages', Page::all())
					->with('menutitle', 'Dashboard Menu');
	}


	public function getNews()
	{
		return view('admin.content-news')
					->with('title', 'Content')
					->with('news', News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getBugReports()
	{
		return view('admin.bugreports')
					->with('title', 'Bug Reports')
					->with('menutitle', 'Dashboard Menu');
	}

	public function getServerStatus()
	{
		//$phpmem = `top -n 1 -p \`cat /run/php5-fpm.pid\` | grep root | awk '{print $8}'`;
		//$nginxmem = `top -n 1 -p \`cat /run/nginx.pid\` | grep root | awk '{print $8}'`;

		$phpmem = `ps -p \`cat /run/php/php7.2-fpm.pid\` -o %mem | grep ' '`;
		$nginxmem = `ps -p \`cat /run/nginx.pid\` -o %mem | grep ' '`;

		$loads = sys_getloadavg();

		$myname = gethostname();
		$hosts = ['lenovo2014' => 8, 'twilightsparkle' => 4];
		$serverload = ($loads[0] / $hosts[$myname]) * 100;

		// $total_disk = disk_total_space('/');
		// $disk_usage_raw = (disk_free_space('/') / disk_total_space('/'));
		// $diskusage = 100 - number_format((float)($disk_usage_raw*100), 2, '.', '');
		// $diskamount = ($disk_usage_raw$total_disk)

		$disk = new DiskStatus('/');

		$meminfo = `free -m | awk 'NR==2 {print $2, $7}'`;
		$memparams = explode(' ', $meminfo);
		$memsize = number_format((float)(  (trim($memparams[0]) - trim($memparams[1])) / trim($memparams[0]) * 100  ), 2, '.', '');


		//SERVICE STATUSES
		$service_nginx = `/usr/sbin/service nginx status | awk 'NR==3 {print $2, $3}'`;
		$service_postgres = `/usr/sbin/service postgresql@* status | awk 'NR==3 {print $2, $3}'`;
		$service_php = `/usr/sbin/service php7.2-fpm status | awk 'NR==3 {print $2, $3}'`;

		$statuses = [];
		$statuses['nginx'] = ['src' => explode(' ', $service_nginx)];
		$statuses['postgres'] = ['src' => explode(' ', $service_postgres)];
		$statuses['php'] = ['src' => explode(' ', $service_php)];

		foreach ($statuses as $key => $value) {
			if(strtolower(trim($value['src'][0])) == 'active') {
				$statuses[$key]['text'] = ucfirst(preg_replace('/[^A-Za-z0-9\-]/', '', $value['src'][1]));
				$statuses[$key]['color'] = 'green';
			}else{
				$statuses[$key]['text'] = ucfirst(implode(' ', $value['src']));
				$statuses[$key]['color'] = 'red';
			}
		}
		//$phpmem = 0;
		//$nginxmem = 0;

		$server = Server::select('DFW', 'f66788b1-e31b-4f3b-b675-97b0b669ca9c'); /* 8e6873ce-fb24-4509-a604-4cf5546d4ae5 */

		return view('admin.server-status')
					->with('title', 'Server Status')
					->with('phpmem', trim($phpmem))
					->with('nginxmem', trim($nginxmem))
					->with('memsize', $memsize)
					->with('server', $server)
					->with('services', [
						'nginx' => [
							'title' => 'NGINX',
							'percent' => trim($nginxmem),
							'status' => $statuses['nginx']['text'],
							'status_color' => $statuses['nginx']['color']
						],
						'postgres' => [
							'title' => 'PostgreSQL',
							'percent' => 0,
							'status' => $statuses['postgres']['text'],
							'status_color' => $statuses['postgres']['color'],
							'status_append' => Server::databaseSize()
						],
						'php' => [
							'title' => 'PHP',
							'percent' => trim($phpmem),
							'status' => $statuses['php']['text'],
							'status_color' => $statuses['php']['color']
						]
					])
					->with('serverload', $serverload)
					->with('disk', $disk)
					->with('menutitle', 'Dashboard Menu');
	}

	public function postLogin()
	{
		$input = array(
			//'email'    => Request::input( 'username' ), // May be the username too
			'username' => Request::input( 'username' ), // so we have to pass both
			'password' => Request::input( 'password' )
		);

		if (Auth::attempt($input, true )) {
			return redirect()->intended(route('admin-welcome'));
		}else{
			$messageBag = new MessageBag(['err' => 'The login is incorrect. Please try again.']);

			return redirect()->route('admin-login')
							->withInput(Request::except('password'))
							->withErrors($messageBag);
		}
	}

	/*
		COMMUNITY MANAGEMENT FUNCTIONS
	*/
	public function getCommunitiesIndex()
	{
		return view('admin.communities')
					->with('title', 'Content')
					->with('communities', News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCommunitiesSpotlight()
	{
		return view('admin.communities-spotlight')
					->with('title', 'Content')
					->with('communities', News::all())
					->with('spotlights', CommunitySpotlight::orderBy("expires_at", "desc")->get())
					->with('menutitle', 'Dashboard Menu');
	}
	public function getCommunitiesSpotlightRecord($id)
	{
		return view('admin.communities-spotlight-edit')
					->with('title', 'Content')
					->with('communities', News::all())
					->with('spotlight', CommunitySpotlight::find($id))
					->with('menutitle', 'Dashboard Menu');
	}
	public function postCommunitiesSpotlightRecord($id)
	{
		$validator = Validator::make(Request::all(),
			array(
				'spotlight_id' => 'required|numeric|min:1',
				'spotlight_title' => 'nullable',
				'community_title' => 'nullable',
				'community_description' => 'nullable',
			)
		);

		if($validator->fails()) {
			Input::flash();
			return view('admin.communities-spotlight-edit')
					->with('spotlight', CommunitySpotlight::find($id))
					->with('title', 'Content')
					->withErrors($validator)
					->with('menutitle', 'Dashboard Menu');
		}

		if( $id == Input::get('spotlight_id') ) {
			$spotlight = CommunitySpotlight::find($id);
			$spotlight->spotlight_title = Input::get('spotlight_title');
			$spotlight->community_title = Input::get('community_title');
			$spotlight->community_description = Input::get('community_description');
			if( $spotlight->save() ) {
				return redirect()->route('admin-communities-spotlight')
							->withSuccess('Spotlight was updated.');
			} else {
				return redirect()->route('admin-communities-spotlight')
							->withErrors(['Spotlight could not be updated.']);
			}
		} else {
			Input::flash();
			return view('admin.communities-spotlight-edit')
					->with('spotlight', CommunitySpotlight::find($id))
					->with('title', 'Content')
					->withErrors('a pony hasdied')
					->with('menutitle', 'Dashboard Menu');
		}
	}

	public function postCommunitiesSpotlightRemove($id)
	{
		$validator = Validator::make(Request::all(),
			array(
				'spotlight_id' => 'required',
				'delete' => 'required',
			)
		);

		if($validator->fails()) {
			return redirect()->route('admin-communities-spotlight')
					->withErrors($validator);
		}

		//first lets makes sure we have an eligible community
		$spotlight = CommunitySpotlight::find( $id );

		if( $id !== Input::get('spotlight_id') ) {
			return redirect()->route('admin-communities-spotlight')
					->withErrors(['sent wrong spotlight id']);
		}
		if( strtotime($spotlight->created_at) == Input::get('delete') ) {
			if( $spotlight->delete() ) {
				return redirect()->route('admin-communities-spotlight')
					->withSuccess('Spotlight removed');
			} else {
				return redirect()->route('admin-communities-spotlight')
					->withErrors(['this spotlight could not be defeated']);
			}
		} else {
			return redirect()->route('admin-communities-spotlight')
					->withErrors(['invalid deletion key']);
		}

	}

	public function postCommunitiesSpotlightNew()
	{
		$validator = Validator::make(Request::all(),
			array(
				'community-id' => 'required',
				'start_date' => 'required',
				'end_date' => 'required',
				'spotlight_title' => 'nullable',
				'community_title' => 'nullable',
				'community_description' => 'nullable',
			)
		);

		if($validator->fails()) {
			return redirect()->route('admin-communities-spotlight')
					->withErrors($validator);
		}

		//first lets makes sure we have an eligible community
		$test_community = Profile::find( Input::get('community-id') );
		$errs = array();

		if ( ! $test_community->has_active_subscription() ) {
			$errs[] = 'This is a free profile. Fuck \'em.';
		}

		//next lets check if this start date is booked)
		if (self::timeIsBooked( Input::get('start_date') ) ) {
			$errs[] = 'The start day you have chosen is already booked.';
		}

		//next lets check if this end date is booked)
		if (self::timeIsBooked( Input::get('end_date') ) ) {
			$errs[] = 'The end day you have chosen is already booked.';
		}

		if( count($errs) > 0 ) {
			return redirect()->route('admin-communities-spotlight')
							 ->withErrors($errs);
		}


		$alpha = date("m/d/y", strtotime(Input::get('start_date')))." 00:00:00";
		$omega = date("m/d/y", strtotime(Input::get('end_date')))." 23:59:59";


		/*
		$alpha = date("m/d/y H:i:s", $alpha);
		$omega = date("m/d/y H:i:s", $omega);
		dd([$alpha, $omega]);
		*/

		$spotlight = new CommunitySpotlight;
		$spotlight->community_id =  Input::get('community-id');
		$spotlight->starts_at = $alpha;
		$spotlight->expires_at = $omega;
		$spotlight->impressions = 0;
		$spotlight->clicks = 0;
		$spotlight->spotlight_title = Input::get('spotlight_title');
		$spotlight->community_title = Input::get('community_title');
		$spotlight->community_description = Input::get('community_description');

		if ( ! $spotlight->save() ) {
			return redirect()->route('admin-communities-spotlight')
							 ->withErrors(['death to ponies']);
		} else {
			return redirect()->route('admin-communities-spotlight')
							 ->withSuccess('Spotlight has been scheduled');
		}

	}

	public function timeIsBooked($time) {
		$r = CommunitySpotlight::where('starts_at', '<=', $time )
								->where('expires_at', '>=', $time)->first();
		if( count($r) > 0 ) {
			return true;
		} else {
			return false;
		}
	}

	public function getCommunitiesAmenities()
	{
		return view('admin.communities-amenities')
					->with('title', 'Content')
					->with('amenities', Amenities::orderBy("order")->get() )
					->with('menutitle', 'Dashboard Menu');
	}

	public function postCommunitiesAmenities()
	{
		$data = Input::all();
	
		foreach ( $data['rows'] as $row ) {

			$m = Amenities::firstOrNew( ["name" => $row['fname']] );
			$m->name = $row['fname'];
			$m->title = $row['title'];
			$m->disabled = $row['disabled'];
			$m->visible = $row['visible'];
			$m->order = $row['order'];
			$m->save();

		}

		return Response::json( ["status" => 1, "data" => Amenities::all() ] );
	}

	public function getCommunitiesPlans()
	{
		return view('admin.communities-plans')
					->with('title', 'Content')
					->with('communities', News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCommunitiesSettings()
	{
		return view('admin.communities-settings')
					->with('title', 'Content')
					->with('communities', News::all())
					->with('menutitle', 'Dashboard Menu');
	}

}