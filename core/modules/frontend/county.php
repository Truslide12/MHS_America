<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_County extends Module {
	private $_county;
	function initialize() {
		$state = phpFastCache::get("state_".strtolower(trim($_GET['state'])));
		if($state == null || s('disablecache')){
			$state = Database::summon()->select_one()->from('states')->where("`abbr` = '".trim(strtolower($_GET['state']))."'")->execute('fetchArray');
			if(!empty($state) && !s('disablecache')){phpFastCache::set("state_".strtolower($state['abbr']),$state,3600);}
		}
		$county = phpFastCache::get("state_".strtolower($state['abbr'])."_county_".strtolower($_GET['id']));
		if($county == null || s('disablecache')){
			$county = Database::summon()->select_one()->from('counties')->where("`name` = '".$_GET['id']."' AND `state` = ".$state['id']."")->execute("fetchArray");
			if(!empty($county) && !s('disablecache')){phpFastCache::set("state_".strtolower($state['abbr'])."_county_".strtolower($county['name']),$county,86400);}
		}
		if(is_array($county)){
			Page::summon()->set('success',"yes");
			if($county['cityident'] == 0){
				$cities = phpFastCache::get("state_".strtolower($state['abbr'])."_county_".strtolower($county['name'])."_cities");
				if($cities == null || s('disablecache')){
					$cities = Database::summon()->select_perfect()->from('cities')->where("( `county` = ".$county['id']." OR `countyb` = ".$county['id']." OR `countyc` = ".$county['id']." OR `countyd` = ".$county['id']." OR `countye` = ".$county['id']." ) ORDER BY `name` ASC")->execute("fetchArray"); /*  AND state = '".$state['id']."' */
					if(!empty($cities) && !s('disablecache')){phpFastCache::set("state_".strtolower($statedata['abbr'])."_county_".strtolower($county['name'])."_cities",$cities,1800);}
				}
				$counties = phpFastCache::get("state_".strtolower($state['abbr'])."_counties");
				if($counties == null || s('disablecache')){
					$counties = Database::summon()->select_perfect()->from('counties')->where("`state` = ".$state['id']." ORDER BY `name` ASC")->execute("fetchArray");
					if(!empty($counties) && !s('disablecache')){phpFastCache::set("state_".strtolower($state['abbr'])."_counties",$counties,3600);}
				}
				for($i=0;$i<count($cities);$i++) {
					$comms = Database::summon()->select_perfect()->from('communities')->where('`city` = '.$cities[$i]['id'])->execute('fetchCount');
					$cities[$i]['commcount'] = intval($comms);
					if($cities[$i]['commcount'] > 0) {
						$home = Database::summon()->select_perfect('h.id')->from('community_homes h LEFT JOIN mhs_communities c ON h.cid = c.id')->where('c.city = '.$cities[$i]['id'])->execute("fetchArray");
						if($home === false) {$cities[$i]['homecount'] = 0;}else{$cities[$i]['homecount'] = count($home);}
						$space = Database::summon()->select_perfect('s.id')->from('community_spaces s LEFT JOIN mhs_communities c ON s.cid = c.id')->where('c.city = '.$cities[$i]['id'])->execute("fetchArray");
						if($space === false) {$cities[$i]['lotcount'] = 0;}else{$cities[$i]['lotcount'] = count($space);}
					}else{
						$cities[$i]['homecount'] = 0;
						$cities[$i]['lotcount'] = 0;
					}
					$cities[$i]['procount'] = 0;
					$cities[$i]['tick'] = $i+1;
				}
				Page::summon()->set('county', $county);
				$this->_county = $county;
				Page::summon()->set('cities', $cities);
			}else{
				$city = Database::summon()->select_one()->from('cities')->where("state = '".$state['id']."' AND id = '".trim(strtolower($county['cityident']))."'")->execute("fetchArray");		
				Page::summon()->set('city', $city);
				if($_GET['categ'] == "pros") {
					$pros = Database::summon()->select_perfect()->from('professionals')->where("state = '".$state['id']."' AND (county = '".$county['id']."' OR countyb = '".$county['id']."' OR countyc = '".$county['id']."' OR countyd = '".$county['id']."' OR countye = '".$county['id']."') ORDER by name ASC")->execute("fetchArray");
					Page::summon()->set('pros', $pros);
				}else{
					$parks = Database::summon()->select_perfect()->from('communities')->where("state = '".$state['id']."' AND city = '".$county['cityident']."' ORDER by name ASC")->execute("fetchArray");
					Page::summon()->set('parks', $parks);
				}
			}
			Page::summon()->set('hierarchy',"state/".$state['abbr']."/county/".$county['name']."/");
		}else{
			Page::summon()->set('success',"no");
			Page::summon()->set('city', '');
			Page::summon()->set('county', '');
			Page::summon()->set('parks', '');
		}
		Page::summon()->set('state', $state);
		Page::summon()->set('title',$county['title'].(($county['hidesuffix'] != 1) ? ( ($state['suffix'] != '') ? " ".$state['suffix'] : " ".l('county') ) : '').", ".strtoupper($state['abbr']));
		$ads = Database::summon()->select_perfect()->from('advertisements')->where('`disabled` = 0 AND ((`type` = 3 AND `location` = '.$county['metro'].') OR (`type` = 4 AND `location` = '.$county['id'].'))')->limit(4)->execute("fetchArray");
		if($ads !== false && !empty($ads)) {
			$ad_temp = array(array('id' => 0), array('id' => 0), array('id' => 0), array('id' => 0));
			for($x=0;$x<count($ads);$x++) {
				$ad_temp[$x] = $ads[$x];
			}
			Page::summon()->set('ads', $ad_temp);
			Page::summon()->set('adsstart', intval(s('adsstart'))*4); /*How many rows before the ads show - 4 cities per row */
			Page::summon()->set('adspresent', true);
		}else{
			Page::summon()->set('adspresent', false);
		}
	}

	function hook_renderer_end() {
		if($this->_county['cityident'] == 0 || p('success') == "no"){
			$this->setTemplate("united-states-county.tpl");
		}else{
			$this->setTemplate("united-states-city.tpl");
		}
	}

}
 
?>
