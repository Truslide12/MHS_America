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
use App\Models\SMSettings;

use Image;
use URL;
use Storage;
use File;
use App\Upload;
use Imagick;


use App\Models\DiskStatus;
use App\Models\Server;

class SiteMapController extends Pony {
	

	public $base = "https://mhsamerica.com";
	static $start_time;
	static $end_time;


	public function getIndex()
	{
		return view('admin.sitemap.index')
				->with('title', 'Content')
				->with('menutitle', 'Dashboard Menu');
	}

	public function getSettings()
	{
		$static_groups = (object)[
			'static' => SMSettings::name('static-pages'),
			'promo' => SMSettings::name('promo-pages'),
			'search' => SMSettings::name('search-pages'),
			'profiles' => SMSettings::name('paid-profiles'),
		];

		$explore_groups = (object)[
			'national' => SMSettings::name('national-page'),
			'states' => SMSettings::name('state-pages'),
			'counties' => SMSettings::name('county-pages'),
			'cities' => SMSettings::name('city-pages'),
		];

		$blocks = array('Static' => $static_groups, 'Explore' => $explore_groups);
		//dd($static_groups);
		return view('admin.sitemap.settings')
				->with('static_groups', $static_groups)
				->with('explore_groups', $explore_groups)
				->with('blocks', $blocks)
				->with('title', 'Content')
				->with('menutitle', 'Dashboard Menu');
	}

	public function postSettings()
	{

		$blocks = [
			'static_page' => self::saveGroup('static-pages'),
			'promo_page' => self::saveGroup('promo-pages'),
			'search_page' => self::saveGroup('search-pages'),
			'profiles_page' => self::saveGroup('paid-profiles'),
			'national_page' => self::saveGroup('national-page'),
			'states_page' => self::saveGroup('state-pages'),
			'counties_page' => self::saveGroup('county-pages'),
			'cities_page' => self::saveGroup('city-pages')
		];

		$msgs = array();
		foreach ($blocks as $key => $value) {
			if ( $value[0] ) {
				//$msgs[] = $key.' Settings Saved';
			} else {
				$msgs[] = $value[1];
			}
		}
		//dd($msgs);
		if ( count($msgs) > 0 ) {
			return redirect()->route('admin-sitemap-settings')->withErrors($msgs);
		} else {
			return redirect()->route('admin-sitemap-settings')->with('success', 'All Settings Saved');
		}

	}

	private function saveGroup($name) {
		$validator = Validator::make(Request::all(),
			array(
				$name.'-priority' => 'required',
				$name.'-badge_color' => 'required',
				$name.'-badge_bg' => 'required',
				$name.'-badge_text' => 'required',
			)
		);

		if($validator->fails()) {
			return [false, $name." failed"];
		}

		$group = SMSettings::name($name);
		if ( is_object($group) ) {
			$group->priority 	= Input::get($name.'-priority');
			$group->badge_color = Input::get($name.'-badge_color');
			$group->badge_bg 	= Input::get($name.'-badge_bg');
			$group->badge_text 	= Input::get($name.'-badge_text');
			$group->disabled 	= (Input::exists($name.'-disabled'))?false:true;
			
			if ( $group->save() ) { return [true, 'lit']; }
		}
		return [false, 'fck'];
	}

	public function getManage()
	{
		$sitemaps = self::fetchSiteMaps();
		return view('admin.sitemap.manage')
				->with('sitemaps', $sitemaps['items'])
				->with('totals', $sitemaps['totals'])
				->with('title', 'Content')
				->with('menutitle', 'Dashboard Menu');
	}

	private function fetchSiteMaps() {
		$items = [];
		$total_links = 0;
		$total_size = 0;

		foreach ( Storage::disk('sitemaps')->files() as $file) {


			$lastmod = File::lastModified(public_path().'/sitemaps/xml/'.$file);
			$size = File::size(public_path().'/sitemaps/xml/'.$file);
			$x = new \SimpleXMLElement( file_get_contents(public_path().'/sitemaps/xml/'.$file) );
			$links = $x->url->count();
			$total_links += $links;
			$total_size += $size;
			$items[] = [
				"color"=>"#fff",
				"bgcolor"=> "#FF5959",
				"desc" => "STATIC PAGE",
				"loc" => "sitemaps/xml/".$file,
				"lastmod" => date("m/d/y H:i:s", $lastmod),
				"size" => self::readsize($size),
				"links" => $links
			];
		};

		return ["items"=>$items, "totals"=>["size"=>self::readsize($total_size), "links"=>$total_links]];
	}

	private function readsize($size){
		if($size >= 1073741824){
			$fileSize = round($size/1024/1024/1024, 1) . " GB";
		} else if ($size >= 1048576) {
			$fileSize = round($size/1024/1024, 1) . " MB";
		} else if ($size >= 1024) {
			$fileSize = round($size/1024, 1) . " KB";
		} else {
			$fileSize = round($size/1000, 3) . " KB";
		}

		return $fileSize;
	}
}