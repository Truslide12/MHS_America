<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;
use Illuminate\Support\MessageBag;
use Auth;
use Redirect;
use Request;
use Response;
use Input;
use View;
use Server;
use App\Models\Amenities;
use App\Models\DiskStatus;

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
					->with('pages', \Page::all())
					->with('menutitle', 'Dashboard Menu');
	}


	public function getNews()
	{
		return view('admin.content-news')
					->with('title', 'Content')
					->with('news', \News::all())
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

		$phpmem = `ps -p \`cat /run/php-fpm/php-fpm.pid\` -o %mem | grep ' '`;
		$nginxmem = `ps -p \`cat /run/nginx.pid\` -o %mem | grep ' '`;

		$loads = sys_getloadavg();

		$myname = gethostname();
		$hosts = ['lenovo2014' => 8, 'derpyhooves' => 4];
		$serverload = ($loads[0] / $hosts[$myname]) * 100;

		// $total_disk = disk_total_space('/');
		// $disk_usage_raw = (disk_free_space('/') / disk_total_space('/'));
		// $diskusage = 100 - number_format((float)($disk_usage_raw*100), 2, '.', '');
		// $diskamount = ($disk_usage_raw$total_disk)

		$disk = new DiskStatus('/');

		//$phpmem = 0;
		//$nginxmem = 0;

		$server = Server::select('DFW', '8e6873ce-fb24-4509-a604-4cf5546d4ae5');

		return view('admin.server-status')
					->with('title', 'Server Status')
					->with('phpmem', trim($phpmem))
					->with('nginxmem', trim($nginxmem))
					->with('server', $server)
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
					->with('communities', \News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCommunitiesSpotlight()
	{
		return view('admin.communities-spotlight')
					->with('title', 'Content')
					->with('communities', \News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCommunitiesAmenities()
	{
		return view('admin.communities-amenities')
					->with('title', 'Content')
					->with('amenities', \Amenities::orderBy("order")->get() )
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
					->with('communities', \News::all())
					->with('menutitle', 'Dashboard Menu');
	}

	public function getCommunitiesSettings()
	{
		return view('admin.communities-settings')
					->with('title', 'Content')
					->with('communities', \News::all())
					->with('menutitle', 'Dashboard Menu');
	}

}