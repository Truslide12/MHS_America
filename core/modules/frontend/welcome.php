<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Welcome extends Module {
	function initialize() {
		Page::summon()->set('meta_keywords',"mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians");
		Page::summon()->set('meta_title', "Search Available Spaces and Services");
		Page::summon()->set('dublin_subject', "Mobile home spaces, contractors, and services");
		Page::summon()->set('dublin_creator', "Kage-Mykel Edwards");
		Page::summon()->set('advert', false);
		Page::summon()->set('canvas',fetch_canvas());
		
		//How recent must news be?
		//$newslatest = time()-(14*24*60*60);
		$newslatest = 0;
		$news = Database::summon()->select_perfect()->from('news')->where("`timestamp` >= ".strval($newslatest))->execute('fetchArray');
		for($x=0;$x<count($news);$x++) {
			$news[$x]['fancydate'] = date('M j, Y',$news[$x]['timestamp']);
		}
		Page::summon()->set('news', $news);
		if(p('is_search') == true) {
			Page::summon()->set('states',Database::summon()->select_perfect()->from('states')->execute('fetchArray'));
		}
	}
}

 ?>