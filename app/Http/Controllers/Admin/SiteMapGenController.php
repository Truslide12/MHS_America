<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Pony;


use App;
use View;
use Storage;
use File;
use App\Models\Canvas;
use App\Models\Geoname;
use App\Models\County;
use App\Models\CityCountyLink;
use App\Models\Region;
use App\Models\State;
use App\Models\Profile;
use App\Models\SMRecord;
use App\Models\SMSettings;
use App\Models\Home;

class SiteMapGenController extends Pony {

	public $base = "https://mhsamerica.com";
	static $start_time;
	static $end_time;

	private function generateSiteMapIndexFile() {

		$receipt = (object)[];
		$receipt->messages = array();		
		$sitemaps = Storage::disk('sitemaps')->files();
		$mapfiles = array();
		$e = array();
		foreach ($sitemaps as $file) {
			if( $file !== "sitemap.xml" ) {
				//loc & lastmod
				$lastmod = File::lastModified(public_path().'/sitemaps/xml/'.$file);
				$e[] = ['loc'=>$this->base.'/sitemaps/xml/'.$file, 'lastmod'=>date("m/d/y H:i:s",$lastmod)];
				$mapfiles[] = self::XmlSiteMapBlock((object)$e[count($e)-1]);
			}

		}

		$receipt->xml = self::XmlSiteMapIndex($mapfiles);
		$receipt->html = self::HtmlIndexTable($e);

		$receipt->messages[] = count($mapfiles)." sitemaps have been collected";

		if ( file_put_contents("sitemaps/xml/sitemap.xml", $receipt->xml) ) {
			$receipt->messages[] = "sitemap.xml was successfully generated.";

			self::logCreation("index", "sitemap.xml", 0, count($mapfiles));


			if(file_put_contents("sitemap.xml", $receipt->xml)){
				$receipt->messages[] = "sitemap.xml was successfully moved to root.";
			} else {
				$receipt->messages[] = "ERROR: sitemap.xml was not moved to root.";
			}
		} else {
			$receipt->messages[] = "sitemap.xml could not be generated.";
		}

		if ( file_put_contents("sitemaps/html/sitemap.html", $receipt->html) ) {
			$receipt->messages[] = "sitemap.html was successfully generated.";
		} else {
			$receipt->messages[] = "sitemap.html could not be generated.";
		}

		return $receipt;
	}


	public function generateSiteMap() {
		self::startTimer();
		$receipt = self::generateSiteMapIndexFile();
		self::stopTimer();
		$receipt->messages[] = "Request completed in ".round((self::$end_time - self::$start_time), 2)." seconds";
		return json_encode($receipt->messages);
	}

	/*************************************************************************************
	**
	** METHODS FOR WORKING WITH THE LESS.. WTF.. LINKS
	**
	**************************************************************************************/

	/***********************************************
	** Grab up the static pages
	***********************************************/
	private function fetchStaticPageLinks() {

		$items = [];
		$settings = SMSettings::where("name", "static-pages")->first();
		foreach ( Storage::disk('pages')->files() as $file) {
			$clean_name = str_replace(".blade.php", "", $file);
			$lastmod = File::lastModified(base_path().'/resources/views/pages/'.$file);

			$items[] = [
				"color"=>$settings->badge_color,
				"bgcolor"=> $settings->badge_bg,
				"desc" => $settings->badge_text,
				"loc" => $this->base."/page/".$clean_name,
				"lastmod" => date("m/d/y H:i:s", $lastmod),
				"priority" => $settings->priority,
				"changefreq" => $settings->changefreq
			];
		};
		return $items;
	}

	/***********************************************
	** Grab up the promo pages
	***********************************************/
	private function fetchPromoLinks() {

		$items = [];
		$settings = SMSettings::where("name", "promo-pages")->first();

		foreach ( Storage::disk('promos')->files() as $file) {
			$clean_name = str_replace(".blade.php", "", $file);
			$lastmod = File::lastModified(base_path().'/resources/views/pages/as/'.$file);

			$items[] = [
				"color"=>$settings->badge_color,
				"bgcolor"=> $settings->badge_bg,
				"desc" => $settings->badge_text,
				"loc" => $this->base."/".$clean_name,
				"lastmod" => date("m/d/y H:i:s", $lastmod),
				"priority" => $settings->priority,
				"changefreq" => $settings->changefreq
			];
		};

		//manually throw in our get started pages..
		$items[] = ["color"=>"#000", "bgcolor"=> "#50ED67", "desc" => "ORDER PAGE", "loc" => $this->base."/getstarted/home", "lastmod" => date("m/d/y", strtotime('now')), "priority" => 0.75, "changefreq" => "monthly"];
		$items[] = ["color"=>"#000", "bgcolor"=> "#50ED67", "desc" => "ORDER PAGE", "loc" => $this->base."/getstarted/community", "lastmod" => date("m/d/y", strtotime('now')), "priority" => 0.75, "changefreq" => "monthly"];

		return $items;
	}

	/***********************************************
	** Grab up the search pages
	** Its different because these were made a 
	** little different.. 
	***********************************************/
	private function fetchSearchLinks() {

		$items = [];
		$pages = ['search', 'communities','homes','spaces','explore'];
		$settings = SMSettings::where("name", "search-pages")->first();

		foreach ($pages as $page) {
			$clean_name = $page;
			switch ($page) {
				case 'search':
					$lastmod = File::lastModified(base_path().'/resources/views/search/newmap.blade.php');
					break;
				case 'explore':
					$lastmod = File::lastModified(base_path().'/resources/views/explore.blade.php');
					break;
				default:
					$lastmod = File::lastModified(base_path().'/resources/views/search/'.$page.'.blade.php');
					break;
			}
			

			$items[] = [
				"color"=>$settings->badge_color,
				"bgcolor"=> $settings->badge_bg,
				"desc" => $settings->badge_text,
				"loc" => $this->base."/".$clean_name,
				"lastmod" => date("m/d/y H:i:s", $lastmod),
				"priority" => $settings->priority,
				"changefreq" => $settings->changefreq
			];
		}
		return $items;
	}


	/***********************************************
	** Grab up the random pages
	** okay i know this is lame but it will be 
	** better when in acp?? 
	***********************************************/
	private function fetchExtraLinks() {

		$items = [];

		$lm_login = File::lastModified(base_path().'/resources/views/account/login.blade.php');
		$lm_register = File::lastModified(base_path().'/resources/views/account/register.blade.php');
		$lm_recov = File::lastModified(base_path().'/resources/views/account/recovery/home.blade.php');
		$lm_user = File::lastModified(base_path().'/resources/views/account/recovery/username.blade.php');
		$lm_pass = File::lastModified(base_path().'/resources/views/account/recovery/password.blade.php');

		$items[] = ["color"=>"#000", "bgcolor"=> "#FAF898", "desc" => "ACCOUNT PAGE", "loc" => $this->base."/account/login", "lastmod" => date("m/d/y H:i:s", $lm_login), "priority" => 0.2, "changefreq" => "monthly"];
		$items[] = ["color"=>"#000", "bgcolor"=> "#FAF898", "desc" => "ACCOUNT PAGE", "loc" => $this->base."/account/register", "lastmod" => date("m/d/y H:i:s", $lm_register), "priority" => 0.2, "changefreq" => "monthly"];
		$items[] = ["color"=>"#000", "bgcolor"=> "#FAF898", "desc" => "ACCOUNT PAGE", "loc" => $this->base."/account/recovery", "lastmod" => date("m/d/y H:i:s", $lm_recov), "priority" => 0.2, "changefreq" => "monthly"];
		$items[] = ["color"=>"#000", "bgcolor"=> "#FAF898", "desc" => "ACCOUNT PAGE", "loc" => $this->base."/account/recovery/username", "lastmod" => date("m/d/y H:i:s", $lm_user), "priority" => 0.2, "changefreq" => "monthly"];
		$items[] = ["color"=>"#000", "bgcolor"=> "#FAF898", "desc" => "ACCOUNT PAGE", "loc" => $this->base."/account/recovery/password", "lastmod" => date("m/d/y H:i:s", $lm_pass), "priority" => 0.2, "changefreq" => "monthly"];

		return $items;
	}

	/***********************************************
	** This is the function that creates the
	** sitemap files..
	***********************************************/
	private function generateStaticFiles() {

		$receipt = (object)[];
		$receipt->messages = array();
		$links = array();
		$links[] = ["color"=>"#fff", "bgcolor"=> "#000", "desc" => "HOME PAGE", "loc" => $this->base, "lastmod" => date("Y-m-d", strtotime('now')), "priority" => 1, "changefreq" => "daily"];
		$links = array_merge( $links , self::fetchSearchLinks() );
		$links = array_merge( $links , self::fetchPromoLinks() );
		$links = array_merge( $links , self::fetchStaticPageLinks() );
		$links = array_merge( $links , self::fetchExtraLinks() );
		$url_blocks = self::linksToXmlUrlBlocks($links);
		$receipt->xml = self::XmlSiteMap($url_blocks);
		$receipt->html = self::HtmlLinkTable($links);
		$receipt->messages[] = count($links)." Links have been generated";

		if ( file_put_contents("sitemaps/xml/core-sitemap.xml", $receipt->xml) ) {
			self::logCreation("sitemap", "core-sitemap.xml", count($links), 0);
			$receipt->messages[] = "core xml sitemap was successfully generated.";
		} else {
			$receipt->messages[] = "core xml sitemap could not be generated.";
		}

		if ( file_put_contents("sitemaps/html/core-sitemap.html", $receipt->html) ) {
			$receipt->messages[] = "core html sitemap was successfully generated.";
		} else {
			$receipt->messages[] = "core html sitemap could not be generated.";
		}

		return $receipt;
	}

	/***********************************************
	** This is the function that gets called via the 
	** route.. its the most abstracted item here..
	***********************************************/
	public function generateStaticFile() {
		self::startTimer();
		$receipt = self::generateStaticFiles();
		self::stopTimer();
		$receipt->messages[] = "Request completed in ".round((self::$end_time - self::$start_time), 2)." seconds";
		return json_encode($receipt->messages);
	}




	/*************************************************************************************
	**
	** METHODS FOR WORKING WITH THE PROFILE ROUTE LINKS
	**
	**************************************************************************************/

	/***********************************************
	** Grab up the paid profiles
	** Logic here being that if we want the whole
	** "replace your website" appeal, we want some
	** search visibility for the paying customers
	** profile..
	***********************************************/
	private function fetchCommunityLinks() {

		$items = [];
		$settings = SMSettings::where("name", "paid-profiles")->first();

		foreach (Profile::where('type', 'Community')->whereNotNull('subscription_id')->get() as $page) {
			$clean_name = $page->id;
			$items[] = [
				"color"=>$settings->badge_color,
				"bgcolor"=> $settings->badge_bg,
				"desc" => $settings->badge_text,
				"loc" => $this->base."/profile/".$clean_name,
				"lastmod" => date("m/d/y H:i:s", strtotime($page->updated_at)),
				"priority" => $settings->priority,
				"changefreq" => $settings->changefreq
			];
		}
		return $items;
	}

	/***********************************************
	** This is the function that creates the
	** sitemap files..
	***********************************************/
	private function generatePaidProfilesFiles() {

		$receipt = (object)[];
		$receipt->messages = array();
		$links = self::fetchCommunityLinks();
		$url_blocks = self::linksToXmlUrlBlocks($links);
		$receipt->xml = self::XmlSiteMap($url_blocks);
		$receipt->html = self::HtmlLinkTable($links);
		$receipt->messages[] = count($links)." Links have been generated";

		if ( file_put_contents("sitemaps/xml/profiles-sitemap.xml", $receipt->xml) ) {
			self::logCreation("sitemap", "profiles-sitemap.xml", count($links), 0);
			$receipt->messages[] = "Profiles xml sitemap was successfully generated.";
		} else {
			$receipt->messages[] = "Profiles xml sitemap could not be generated.";
		}

		if ( file_put_contents("sitemaps/html/profiles-sitemap.html", $receipt->html) ) {
			$receipt->messages[] = "Profiles html sitemap was successfully generated.";
		} else {
			$receipt->messages[] = "Profiles html sitemap could not be generated.";
		}

		return $receipt;
	}

	/***********************************************
	** This is the function that gets called via the 
	** route.. its the most abstracted item here..
	***********************************************/
	public function generateProfileFile() { /*yo dawg, i heard u like files*/
		self::startTimer();
		$receipt = self::generatePaidProfilesFiles();
		self::stopTimer();
		$receipt->messages[] = "Request completed in ".round((self::$end_time - self::$start_time), 2)." seconds";
		return json_encode($receipt->messages);
	}













	/*************************************************************************************
	**
	** METHODS FOR WORKING WITH THE EXPLORE ROUTE LINKS
	**
	**************************************************************************************/

	/***********************************************
	** Simply gather all of the state links into
	** an array..
	***********************************************/
	private function fetchExploreStateLinks($state) {

		$items = [];
		$state = State::where('abbr', $state)->first();

		$state_settings = SMSettings::where("name", "state-pages")->first();
		$county_settings = SMSettings::where("name", "county-pages")->first();
		$city_settings = SMSettings::where("name", "city-pages")->first();

		$lastmod = Home::where('state_id', $state->id)->first();
		//dd($lastmod);
		if( $lastmod instanceof Home ) {
			$lastmod = strtotime($lastmod->created_at);
		} else {
			$lastmod = strtotime("2019-09-21 00:00:00"); /*start of time..*/
		}

		$items[] = [
			"color"=>$state_settings->badge_color,
			"bgcolor"=> $state_settings->badge_bg,
			"desc" => $state_settings->badge_text,
			"loc" => $this->base."/explore/".$state->abbr,
			"lastmod" => date("m/d/y H:i:s", $lastmod),
			"priority" => $state_settings->priority,
			"changefreq" => $state_settings->changefreq
		];

		foreach ( County::byState($state->id)->get() as $county ) {
			$items[] = [
				"color"=>$county_settings->badge_color,
				"bgcolor"=> $county_settings->badge_bg,
				"desc" => $county_settings->badge_text,
				"loc" => $this->base."/explore/".$state->abbr."/".$county->name,
				"lastmod" => date("m/d/y H:i:s", $lastmod), /*use the state because we r running a f'king business*/
				"priority" => $county_settings->priority,
				"changefreq" => $county_settings->changefreq
			];

			foreach ( $county->cities()->get() as $city ) {
				$items[] = [
					"color"=>$city_settings->badge_color,
					"bgcolor"=> $city_settings->badge_bg,
					"desc" => $city_settings->badge_text,
					"loc" => $this->base."/explore/".$state->abbr."/".$county->name."/".$city->name,
					"lastmod" => date("m/d/y H:i:s", $lastmod), /*use the state because we r running a f'king business*/
					"priority" => $city_settings->priority,
					"changefreq" => $city_settings->changefreq
				];
			}
		}
		return $items;
	}

	/***********************************************
	** This is the function that creates the
	** sitemap files..
	***********************************************/
	private function generateExploreStateFiles($state) {

		$receipt = (object)[];
		$receipt->messages = array();
		$links = self::fetchExploreStateLinks($state);
		$url_blocks = self::linksToXmlUrlBlocks($links);
		$receipt->xml = self::XmlSiteMap($url_blocks);
		$receipt->html = self::HtmlLinkTable($links);
		$receipt->messages[] = count($links)." Links have been generated";

		if ( file_put_contents("sitemaps/xml/state-{$state}-sitemap.xml", $receipt->xml) ) {
			self::logCreation("sitemap", "state-{$state}-sitemap.xml", count($links), 0);
			$receipt->messages[] = strtoupper($state)." State xml sitemap was successfully generated.";
		} else {
			$receipt->messages[] = strtoupper($state)." State xml sitemap could not be generated.";
		}

		if ( file_put_contents("sitemaps/html/state-{$state}-sitemap.html", $receipt->html) ) {
			$receipt->messages[] = strtoupper($state)." State html sitemap was successfully generated.";
		} else {
			$receipt->messages[] = strtoupper($state)." State html sitemap could not be generated.";
		}

		return $receipt;
	}


	/***********************************************
	** This is the function that gets called via the 
	** route.. its the most abstracted item here..
	***********************************************/
	public function generateExploreStateFile($state) {

		self::startTimer();
		$receipt = self::generateExploreStateFiles($state);
		self::stopTimer();
		$receipt->messages[] = "Request completed in ".round((self::$end_time - self::$start_time), 2)." seconds";
		return json_encode($receipt->messages);
	}





private function logCreation($type, $name, $link_count, $children) {
	$record = new SMRecord;
	$record->type = $type;
	$record->file_name = $name;
	$record->date_ran = date("m/d/y H:i:s", self::$start_time);
	$record->gen_time = self::getTime() - self::$start_time;
	$record->link_count = $link_count;
	$record->children = $children;
	$record->file_size = File::size(getcwd()."\\sitemaps\\xml\\".$name);
	$record->save();
}




	/*************************************************************************************
	**
	** GENERAL SUPPORT METHODS -- SORRY! No comments but basic shit..
	**
	**************************************************************************************/
	private function startTimer() { self::$start_time = self::getTime(); }
	private function stopTimer() { self::$end_time = self::getTime(); }
	private function getTime(){ $t = explode(" ", microtime()); return $t[1] + $t[0]; }


	/*************************************************************************************
	**
	** XML TEMPLATING METHODS -- SORRY! No comments but basic shit..
	**
	**************************************************************************************/

	private function linksToXmlUrlBlocks($links) {
		$url_blocks = array();
		foreach ($links as $link) {
			$url_blocks[] = self::XmlUrlBlock((object)$link);
		}
		return $url_blocks;
	}

	private function XmlSiteMapIndex($sitemap_blocks) {
		$xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n";
		$xml .= "  <sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\r\n";
		foreach ($sitemap_blocks as $block) {
			$xml .= $block;
		}
		$xml .= '  </sitemapindex>';
		return $xml;
	}

	private function XmlSiteMapBlock($params) {
		$xml  = "  <sitemap>\r\n";
		$xml .= "    <loc>{$params->loc}</loc>\r\n";
		$xml .= "    <lastmod>".date('Y-m-d', strtotime($params->lastmod))."</lastmod>\r\n";
		$xml .= "  </sitemap>\r\n";
		return $xml;
	}

	private function XmlSiteMap($url_blocks) {
		$xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n";
		$xml .= "  <urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\r\n";
		foreach ($url_blocks as $block) {
			$xml .= $block;
		}
		$xml .= '  </urlset>';
		return $xml;
	}

	private function XmlUrlBlock($params) {
		$xml  = "    <url>\r\n";
		$xml .= "      <loc>{$params->loc}</loc>\r\n";
		$xml .= "      <lastmod>".date('Y-m-d', strtotime($params->lastmod))."</lastmod>\r\n";
		$xml .= "      <changefreq>{$params->changefreq}</changefreq>\r\n";
		$xml .= "      <priority>{$params->priority}</priority>\r\n";
		$xml .= "    </url>\r\n";
		return $xml;
	}


	/*************************************************************************************
	**
	** HTML TEMPLATING METHODS -- SORRY! No comments but basic shit..
	**
	**************************************************************************************/

	private function HtmlLinkTable($links)
	{	
		$html  = "<style>th,td{padding:8px;font-size:1em;} th{background: #000;color:#fff;} .badge{ background: silver; border-radius: 12px;font-size:.7em;width:auto;float:left;padding:4px 8px;margin-right:12px;}</style>"; 
		$html .= "<table width=100% border=1>";
		$html .= "<tr>";
		$html .= "<th>loc</th>";
		$html .= "<th>lastmod</th>";
		$html .= "<th>changefreq</th>";
		$html .= "<th>priority</th>";
		$html .= "</tr>";

		foreach ($links as $link) {
			if( ! array_key_exists('color', $link) ) {
				$link['color'] = '';
			}
			if( ! array_key_exists('bgcolor', $link) ) {
				$link['bgcolor'] = '';
			}
			if( ! array_key_exists('desc', $link) ) {
				$link['desc'] = '';
			} else {
				$link['desc'] = "<div class='badge' style='color: {$link['color']};background:{$link['bgcolor']};'>{$link['desc']}</div>";
			}
			$html .= "<tr>";
			$html .= "<td>{$link['desc']} <a href='{$link['loc']}'>{$link['loc']}</a></td>";
			$html .= "<td>{$link['lastmod']}</td>";
			$html .= "<td>{$link['changefreq']}</td>";
			$html .= "<td>{$link['priority']}</td>";
			$html .= "</tr>";

		}

		$html .= "<tr>";
		$html .= "<th colspan='4'>".count($links)." Results Generated in ".round((self::getTime() - self::$start_time), 2)." Seconds</th>";
		$html .= "</tr>";
		$html .= "</table>";

		return $html;
	}

	private function HtmlIndexTable($files)
	{	
		$html  = "<style>th,td{padding:8px;font-size:1em;} th{background: #000;color:#fff;} .badge{ background: silver; border-radius: 12px;font-size:.7em;width:auto;float:left;padding:4px 8px;margin-right:12px;}</style>"; 
		$html .= "<table width=100% border=1>";
		$html .= "<tr>";
		$html .= "<th>loc</th>";
		$html .= "<th>lastmod</th>";
		$html .= "</tr>";

		foreach ($files as $file) {
			$h = str_replace('xml', 'html', $file['loc']);
			$html .= "<tr>";
			$html .= "<td><a href='{$h}'>{$h}</a></td>";
			$html .= "<td>{$file['lastmod']}</td>";
			$html .= "</tr>";

		}

		$html .= "<tr>";
		$html .= "<th colspan='2'>".count($files)." Results Generated in ".round((self::getTime() - self::$start_time), 2)." Seconds</th>";
		$html .= "</tr>";
		$html .= "</table>";

		return $html;
	}

}