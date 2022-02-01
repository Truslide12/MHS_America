<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
class Module_City extends Module {
	function initialize() {
		$state = Database::summon()->select_one()->from('states')->where("`abbr` = '".trim(strtolower($_GET['state']))."'")->execute('fetchArray');
		if($_GET['county']) {
			$county = Database::summon()->select_one()->from('counties')->where("`state` = ".$state['id']." AND `name` = '".trim(strtolower($_GET['county']))."'")->execute("fetchArray");
			$city = Database::summon()->select_one()->from('cities')->where("(`state` = ".$state['id']." OR `stateb` = ".$state['id'].") AND `name` = '".trim(strtolower($_GET['id']))."' AND (`county` = ".$county['id']." OR `countyb` = ".$county['id']." OR `countyc` = ".$county['id']." OR `countyd` = ".$county['id']." OR `countye` = ".$county['id'].")")->execute("fetchArray");
		}else{
			$city = Database::summon()->select_one()->from('cities')->where("state = '".$state['id']."' AND name = '".trim(strtolower($_GET['id']))."'")->execute("fetchArray");
			$county = Database::summon()->select_one()->from('counties')->where("id = ".$city['county'])->execute("fetchArray");
		}
		Page::summon()->set('state', $state);
		Page::summon()->set('county', $county);
		Page::summon()->set('city', $city);
		Page::summon()->set('title',$city['title'].", ".strtoupper($state['abbr']));
		Page::summon()->set('advert', false);
		Page::summon()->set('hierarchy',"locale/".$state['abbr']."/".$county['name']."/".$city['name']."/");
		if($_GET['categ'] == "pros"){
			$pros = Database::summon()->select_perfect("c.*, p.`id` AS profid, p.`username`, p.`plan` as planid")->from('professionals c LEFT JOIN mhs_profiles p ON p.`link` = c.`id`')->where("c.`state` = '".$state['id']."' AND (c.`county` = '".$city['county']."' OR c.`countyb` = '".$city['county']."' OR c.`countyc` = '".$city['county']."' OR c.`countyd` = '".$city['county']."' OR c.`countye` = '".$city['county']."') AND p.`type` = 1 ORDER BY c.`name` ASC")->execute("fetchArray");
			for($w=0;$w<count($pros);$w++) {
				$pros[$w]['kudos_count'] = count(Database::summon()->select_perfect()->from('kudos')->where("profile = ".$pros[$w]['profid'])->execute('fetchArray'));
				$procover = Database::summon()->select()->from('professional_data')->where("`pid` = ".$pros[$w]['id']." AND `name` = 'cover'")->execute('fetchArray');
				if($procover['value']) {
					$pros[$w]['cover'] = $procover['value'];
				}else{
					$pros[$w]['cover'] = '/_/images/no-photo.jpg';
				}
			}
			Page::summon()->set('pros', $pros);
		}else{
			$parks = Database::summon()->select_perfect("c.*, p.`id` AS profid, p.`username`, p.`plan` as planid")->from('communities c LEFT JOIN mhs_profiles p ON p.`link` = c.`id`')->where("c.`state` = '".$state['id']."' AND c.`city` = '".$city['id']."' AND p.`type` = 0 ORDER by c.`name` ASC")->execute("fetchArray");
			for($x=0;$x<count($parks);$x++) {
				$parks[$x]['space_count'] = count(Database::summon()->select_perfect()->from('community_spaces')->where("`cid` = ".$parks[$x]['id'])->execute('fetchArray'));
				$parks[$x]['home_count'] = count(Database::summon()->select_perfect()->from('community_homes')->where("`cid` = ".$parks[$x]['id'])->execute('fetchArray'));
				$parks[$x]['kudos_count'] = count(Database::summon()->select_perfect()->from('kudos')->where("profile = ".$parks[$x]['profid'])->execute('fetchArray'));
				$parkcover = Database::summon()->select()->from('community_data')->where("`cid` = ".$parks[$x]['id']." AND `name` = 'cover'")->execute('fetchArray');
				if($parkcover['value']) {
					$parks[$x]['cover'] = $parkcover['value'];
				}else{
					$parks[$x]['cover'] = '/_/images/no-photo.jpg';
				}
				$features = Database::summon()->select_perfect()->from('plan_feature_matches p LEFT JOIN mhs_features f ON f.id = p.feature')->where('`plan` = '.$parks[$x]['planid'])->execute('fetchArray');
				$fdata = array();
				for($d=0;$d<count($features);$d++) {
					$fdata[$features[$d]['name']] = 1;
				}
				$parks[$x]['plan'] = $fdata;
			}
			Page::summon()->set('parks', $parks);
		}
	}
 
	function hook_renderer_end() {
		$this->setTemplate("united-states-city.tpl");
	}

} 
?>
