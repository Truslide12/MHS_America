<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Plans extends Module {
	function initialize() {
		Page::summon()->set('title',"Business Profile Plans");
		Page::summon()->set('meta_keywords',"mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians");
		Page::summon()->set('meta_title', "Search Available Spaces and Services");
		Page::summon()->set('dublin_subject', "Mobile home spaces, contractors, and services");
		Page::summon()->set('dublin_creator', "Kage-Mykel Edwards");
		Page::summon()->set('advert', false);
		$prefix = fetch_table_prefix();
		$planlist = Database::summon()->pull('plans')->where("visible = 1")->execute("fetchArray");
		for($x=0;$x<count($planlist);$x++) {
			$planlist[$x]['features'] = Database::summon()->select_perfect()->from('plan_feature_matches m LEFT JOIN '.$prefix.'features f ON m.feature = f.id')->where('f.visible = 1 AND m.plan = '.$planlist[$x]['id'].' ORDER BY f.order ASC')->execute("fetchArray");
		}
		Page::summon()->set('planlist',$planlist);
		Page::summon()->set('featured_plan',s('featuredplan'));
	}
}

?>
