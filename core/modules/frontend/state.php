<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_State extends Module {
	function initialize() {
		Module::summon()->setVar('advert', false);
		$statedata = phpFastCache::get("state_".strtolower(trim($_GET['id'])));
		if($statedata == null || s('disablecache')){
			$statedata = Database::summon()->select()->from("states")->where("abbr = '".addslashes(stripslashes($_GET['id']))."'")->limit(1)->execute("fetchArray");
			if(!empty($statedata)){$storestate = true;}
		}
		if($statedata){
			if($storestate && !s('disablecache')){phpFastCache::set("state_".strtolower($statedata['abbr']),$statedata,1800);}
			if(s('usemetros') == 1){ /* Metros or Counties */
				$metros = phpFastCache::get("state_".strtolower($statedata['abbr'])."_metros");
				if($metros == null || s('disablecache')){
					$metros = Database::summon()->select_perfect()->from('metropolitans')->where("`state` = ".$statedata['id']." AND `disabled` = 0 ORDER BY `title` ASC")->execute("fetchArray");
					if(!empty($metros) && !s('disablecache')){phpFastCache::set("state_".strtolower($statedata['abbr'])."_metros",$metros,3600);}
				}
				$metrocount = count($metros);
				Page::summon()->set('metrocount',$metrocount);	
				/* FOR EACH METRO */
				for($m=0;$m<$metrocount;$m++) {
					$counties = Database::summon()->select_perfect("id")->from('counties')->where("`metro` = ".$metros[$m]['id'])->execute("fetchArray");
					$metros[$m]['commcount'] = 0;
					$metros[$m]['homecount'] = 0;
					$metros[$m]['lotcount'] = 0;
					$metros[$m]['procount'] = 0;
					$prothingy = "";
					$or = "";
					for($i=0;$i<count($counties);$i++) {
						$comms = Database::summon()->select_perfect()->from('communities')->where('`county` = '.$counties[$i]['id'])->execute('fetchCount');
						if(intval($comms) > 0) {
							$metros[$m]['commcount'] += intval($comms);
							$home = Database::summon()->select_perfect('h.id')->from('community_homes h LEFT JOIN mhs_communities c ON h.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
							if($home !== false) {$metros[$m]['homecount'] += count($home);}
							$space = Database::summon()->select_perfect('s.id')->from('community_spaces s LEFT JOIN mhs_communities c ON s.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
							if($space !== false) {$metros[$m]['lotcount'] += count($space);}
						}
						$prothingy .= $or."(p.county = ".$counties[$i]['id']." OR p.countyb = ".$counties[$i]['id']." OR p.countyc = ".$counties[$i]['id']." OR p.countyc = ".$counties[$i]['id']." OR p.countyd = ".$counties[$i]['id']." OR p.countye = ".$counties[$i]['id'].")";
						$or = " OR ";
					}
					$pro = Database::summon()->select_perfect('DISTINCT p.id')->from('profiles x LEFT JOIN mhs_professionals p ON p.id = x.link')->where("x.type = 1 AND (".$prothingy.")")->execute("fetchArray");
					if($pro !== false) {$metros[$m]['procount'] += count($pro);}
				}
				Page::summon()->set('metros', $metros);
				/* COUNTIES ALONGSIDE METROS */
				$counties = phpFastCache::get("state_".strtolower($statedata['abbr'])."_counties");
				if($counties == null || s('disablecache')){
					$counties = Database::summon()->select_perfect("c.*, s.`abbr` AS stateabbr")->from('counties c LEFT JOIN mhs_states s ON c.`state` = s.`id`')->where("`state` = ".$statedata['id']." ORDER BY `name` ASC")->execute("fetchArray");
					if(!empty($counties) && !s('disablecache')){phpFastCache::set("state_".strtolower($statedata['abbr'])."_counties",$counties,3600);}
				}
				for($i=0;$i<count($counties);$i++) {
					$comms = Database::summon()->select_perfect()->from('communities')->where('`county` = '.$counties[$i]['id'])->execute('fetchCount');
					$counties[$i]['commcount'] = intval($comms);
					if(intval($comms) > 0){
						$home = Database::summon()->select_perfect('h.id')->from('community_homes h LEFT JOIN mhs_communities c ON h.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
						if($home === false) {$counties[$i]['homecount'] = 0;}else{$counties[$i]['homecount'] = count($home);}
						$space = Database::summon()->select_perfect('s.id')->from('community_spaces s LEFT JOIN mhs_communities c ON s.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
						if($space === false) {$counties[$i]['lotcount'] = 0;}else{$counties[$i]['lotcount'] = count($space);}
					}else{
						$counties[$i]['homecount'] = 0;
						$counties[$i]['lotcount'] = 0;
					}
					$pro = Database::summon()->select_perfect('x.id')->from('profiles x LEFT JOIN mhs_professionals p ON p.id = x.link')->where('x.type = 1 AND (p.county = '.$counties[$i]['id'].' OR p.countyb = '.$counties[$i]['id'].' OR p.countyc = '.$counties[$i]['id'].' OR p.countyc = '.$counties[$i]['id'].' OR p.countyd = '.$counties[$i]['id'].' OR p.countye = '.$counties[$i]['id'].")")->execute("fetchArray");
					if($pro === false) {$counties[$i]['procount'] = 0;}else{$counties[$i]['procount'] = count($pro);}
				}
				Page::summon()->set('counties',$counties);
			}else{ /* Metros or Counties */
				/* COUNTIES ALONE */
				$counties = phpFastCache::get("state_".strtolower($statedata['abbr'])."_counties");
				if($counties == null || s('disablecache')){
					$counties = Database::summon()->select_perfect()->from('counties')->where("`state` = ".$statedata['id']." ORDER BY `name` ASC")->execute("fetchArray");
					if(!empty($counties) && !s('disablecache')){phpFastCache::set("state_".strtolower($statedata['abbr'])."_counties",$counties,3600);}
				}
				for($i=0;$i<count($counties);$i++) {
					$comms = Database::summon()->select_perfect()->from('communities')->where('`county` = '.$counties[$i]['id'])->execute('fetchCount');
					$counties[$i]['commcount'] = intval($comms);
					if(intval($comms) > 0){
						$home = Database::summon()->select_perfect('h.id')->from('community_homes h LEFT JOIN mhs_communities c ON h.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
						if($home === false) {$counties[$i]['homecount'] = 0;}else{$counties[$i]['homecount'] = count($home);}
						$space = Database::summon()->select_perfect('s.id')->from('community_spaces s LEFT JOIN mhs_communities c ON s.cid = c.id')->where('c.county = '.$counties[$i]['id'])->execute("fetchArray");
						if($space === false) {$counties[$i]['lotcount'] = 0;}else{$counties[$i]['lotcount'] = count($space);}
					}else{
						$counties[$i]['homecount'] = 0;
						$counties[$i]['lotcount'] = 0;
					}
					$pro = Database::summon()->select_perfect('x.id')->from('profiles x LEFT JOIN mhs_professionals p ON p.id = x.link')->where('x.type = 1 AND (p.county = '.$counties[$i]['id'].' OR p.countyb = '.$counties[$i]['id'].' OR p.countyc = '.$counties[$i]['id'].' OR p.countyc = '.$counties[$i]['id'].' OR p.countyd = '.$counties[$i]['id'].' OR p.countye = '.$counties[$i]['id'].")")->execute("fetchArray");
					if($pro === false) {$counties[$i]['procount'] = 0;}else{$counties[$i]['procount'] = count($pro);}
				} 
				Page::summon()->set('counties',$counties);
			} /* Metros or Counties */
			Page::summon()->set('module',"state");
			Page::summon()->set('page',$statedata['name']);
			Page::summon()->set('title',$statedata['title']);
			$canvas = fetch_canvas();
			if(is_array($canvas)) {
				Page::summon()->set('canvas',$canvas);
			}else{
				//Page::summon()->set('canvas',array('file' => $statedata['canvas'],'page' => "state", 'credit' => "", 'link' => ""));
			}
			Page::summon()->set('meta_keywords',"mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians, mobile home spaces california, mobile home lots california, mobile home movers california, mobile home specialists california, mobile home experts california, mobile home parks california, mobile home vacancy california, mobile home land california, mobile home electricians california, mobile home technicians");
			Page::summon()->set('meta_title', "Search Available Spaces and Services");
			Page::summon()->set('dublin_subject', "Mobile home spaces, contractors, and services");
			Page::summon()->set('dublin_creator', "Kage-Mykel Edwards");
			Page::summon()->set('state', $statedata);
			$ads = Database::summon()->select_perfect()->from('advertisements')->where('`type` = 0 AND `location` = '.$statedata['id'])->limit(4)->execute("fetchArray");
			$backdrop = Database::summon()->select_one()->from('advertisements')->where('`type` = 2 AND `location` = '.$statedata['id'].' AND `disabled` = 0')->execute("fetchArray");
			$ad_temp = array(array('id' => 0), array('id' => 0), array('id' => 0), array('id' => 0));
			for($x=0;$x<count($ads);$x++) {
				$ad_temp[$x] = $ads[$x];
			}
			if($backdrop['id'] != 0) {Page::summon()->set('backdrop', $backdrop);Page::summon()->set('advert',true);}else{Page::summon()->set('advert',false);}	
			Page::summon()->set('ads', $ad_temp);
		}
	} /* End of the Initializer lulz :3 */
	
	function hook_renderer_end() {
		$this->setTemplate("united-states-state.tpl");
	}
	
}

 ?>
