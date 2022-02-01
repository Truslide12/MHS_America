<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_Metro extends Module {
	function initialize() {
		$metro = Database::summon()->select_one()->from('metropolitans')->where("`name` = '".$_GET['id']."'")->execute("fetchArray");
		if(is_array($metro)){
			Page::summon()->set('success',"yes");
			$cities = Database::summon()->select_perfect("DISTINCT t.*, s.abbr as stateabbr, c.name as countyname")->from('cities t LEFT JOIN mhs_states s ON t.`state` = s.`id` LEFT JOIN mhs_counties c ON (t.`county` = c.`id` OR t.`countyb` = c.`id` OR t.`countyc` = c.`id` OR t.`countyd` = c.`id` OR t.`countye` = c.`id`)')->where("c.`metro` = '".$metro['id']."' ORDER BY t.`title` ASC")->execute("fetchArray");		
			for($i=0;$i<count($cities);$i++) {
				$cities[$i]['homecount'] = 0;
				$cities[$i]['lotcount'] = 0;
				$cities[$i]['procount'] = 0;
				$cities[$i]['tick'] = $i+1;
				$cities[$i]['commcount'] = Database::summon()->select_perfect()->from('communities')->where('`city` = '.$cities[$i]['id'])->execute('fetchCount');
				if($cities[$i]['commcount'] > 0) {
					$home = Database::summon()->select_perfect('DISTINCT h.id')->from('community_homes h LEFT JOIN mhs_communities c ON h.cid = c.id')->where('c.city = '.$cities[$i]['id'])->execute("fetchArray");
					if($home !== false) {$cities[$i]['homecount'] = count($home);}
					$space = Database::summon()->select_perfect('DISTINCT s.id')->from('community_spaces s LEFT JOIN mhs_communities c ON s.cid = c.id')->where('c.city = '.$cities[$i]['id'])->execute("fetchArray");
					if($space !== false) {$cities[$i]['lotcount'] = count($space);}
				}
				$pro = Database::summon()->select_perfect('DISTINCT x.id')->from('profiles x LEFT JOIN mhs_professionals p ON p.id = x.link')->where("x.type = 1 AND (p.metro = ".$metro['id']." OR p.county = ".$cities[$i]['county']." OR p.countyb = ".$cities[$i]['county']." OR p.countyc = ".$cities[$i]['county']." OR p.countyd = ".$cities[$i]['county']." OR p.countye = ".$cities[$i]['county'].")")->execute("fetchArray");
				if($pro === false) {$counties[$i]['procount'] = 0;}else{$counties[$i]['procount'] = count($pro);}
			}
			Page::summon()->set('cities', $cities);
			Page::summon()->set('hierarchy',"region/".$metro['name']."/");
			if($_GET['categ'] == "pros") {
				$categories = Database::summon()->select_perfect()->from('categories')->execute('fetchArray');
				for($x=0;$x<count($categories);$x++){
					$categories[$x]['langname'] = 'cat_'.$categories[$x]['name'];
					$categories[$x]['langname_plural'] = 'cat_'.$categories[$x]['name'].'_plural';
				}
				if($_GET['selec'] != "" && in_array($_GET['selec'], array_columns($categories,'name'))) {
					/* We're in a category already */
				}else{
					/* Display the category chooser */
					Page::summon()->set('categories', $categories);
				}
			}
		}else{
			Page::summon()->set('success',"no");
			Page::summon()->set('city', '');
			Page::summon()->set('county', '');
			Page::summon()->set('parks', '');
		}
		Page::summon()->set('metro',$metro);
		Page::summon()->set('title',(($metro['prefix']!='') ? ($metro['prefix']." ") : '').$metro['title']." ".(($metro['hidesuffix']==1) ? (($metro['suffix'] != "") ? ucwords($metro['suffix']) : '') : (($metro['micro'] == 1) ? l('micropolitan area') : l('metropolitan area')) ));
		Page::summon()->set('advert', false);

		$ads = Database::summon()->select_perfect()->from('advertisements')->where('`type` = 3 AND `location` = '.$metro['id'])->limit(4)->execute("fetchArray");
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
		$this->setTemplate("united-states-metro.tpl");
	}
	
}
 
?>
