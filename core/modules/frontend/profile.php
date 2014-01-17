<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Profile extends Module {
	public $_profiletype = "";
	public function initialize() {
		$commands = array('watch','unwatch','kudos','nokudos','edit','email');
		$prof = Database::summon()->select()->from('profiles')->where("`username` = '".trim(strtolower($_GET['name']))."' AND `id` = ".$_GET['id']." AND `disabled` = 0")->execute('fetchArray');
		$types = array(0 => 'communities',1 => 'professionals');
		$this->_profiletype = $types[intval($prof['type'])];
		$profile = Database::summon()->select()->from($this->_profiletype)->where("id = ".$prof['link'])->execute('fetchArray');
		$profile['username'] = $prof['username'];
		$profile['prof_id'] = $prof['id'];
		$profile['company'] = $prof['company'];
		$profile['proftype'] = $this->_profiletype;
		$hours = Database::summon()->select_perfect()->from('profile_hours')->where('`profile` = '.$profile['prof_id'])->execute('fetchArray');
		Page::summon()->set('shortdays', array(0,"Mon","Tue","Wed","Thu","Fri","Sat","Sun"));
		Page::summon()->set('longdays', array(0,"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"));
		if(empty($hours)){
			Page::summon()->set('hourspresent', false);
		}else{
			Page::summon()->set('hourspresent', true);
			$ranges = array();
			$i = 0;
			for($x=1;$x<8;$x++) {
				if($hours[$i]['day'] == $x || $i == 0) {
					if($hours[$i]['start'] != 0){
						if($hours[$i]['start'] > 24) {$hours[$i]['start'] -= 23.5;}
						if($hours[$i]['end'] > 24) {$hours[$i]['end'] -= 23.5;}
						$st_ampm = "am";
						if($hours[$i]['start'] > 12) {
							$hours[$i]['start'] -= 12;
							$st_ampm = "pm";
						}
						if(is_float($hours[$i]['start'])) {$stime = floor($hours[$i]['start']).":30".$st_ampm;}else{$stime = $hours[$i]['start'].":00".$st_ampm;}
						$ed_ampm = "am";
						if($hours[$i]['end'] > 12) {
							$hours[$i]['end'] -= 12;
							$ed_ampm = "pm";
						}
						if(is_float($hours[$i]['end'])) {$etime = floor($hours[$i]['end']).":30".$ed_ampm;}else{$etime = $hours[$i]['end'].":00".$ed_ampm;}
					}else{$stime = 0;$etime = 0;}
					$ranges[$i] = array('start' => $hours[$i]['day'],'time' => $stime, 'endtime' => $etime, 'end' => 0);
					$i++;
				}else{
					$ranges[$i-1]['end'] = $hours[$i]['day']-1;
				}
			}
			$profile['hours'] = $ranges;
		} /* END OF HOURS EMPTY OR NOT */
		Page::summon()->set('profile',$profile);
		Module::setVar('profile',$profile);
		Module::setVar('editmode',false);
		Module::setVar('isowner',false);
		if(isUserLoggedIn()) {
			Module::setVar('ceditor',Database::summon()->select_one()->from('profile_user_matches')->where("`user` = ".u('id')." AND `profile` = ".$profile['prof_id'])->execute('fetchArray'));
			$ceditor = Module::getVar('ceditor');
			if(!empty($ceditor)) {
				Module::setVar('isowner',($ceditor['owner'] == 1));
			}
		}
		if(in_array($_GET['cmd'], $commands)){
			Module::summon()->setVar('command',$_GET['cmd']);
			Module::summon()->pushState($_GET['cmd']);
		}
		Page::summon()->set('editmode', Module::getVar('editmode'));
		Page::summon()->set('isowner', Module::getVar('isowner'));
		$userbox_items = array();
		if($isowner) {
			$userbox_items[] = array('separator');
			$userbox_items[] = array('title',$profile['title']);
			$userbox_items[] = array('/'.$profile['prof_id'].'/'.$profile['username'].'/edit','Edit Profile');
			$userbox_items[] = array('/account/profile?action=plan&profile='.$profile['prof_id'],'Plan Details');
			$userbox_items[] = array('/account/profile?action=analytics&profile='.$profile['prof_id'],'Analytics');
		}
		Page::summon()->set('useritems',$userbox_items);
		if($this->_profiletype == "communities"){
			$datas = Database::summon()->select_perfect()->from('community_data')->where("`cid` = ".$profile['id'])->execute('fetchArray');
			$data = array();
			for($x=0;$x<count($datas);$x++) {
				$data[($datas[$x]['name'])] = $datas[$x]['value'];
			}
			Page::summon()->set('data',$data);
			$spaces = Database::summon()->select_perfect()->from('community_spaces')->where("`cid` = ".$profile['id'])->execute('fetchArray');
			$homes = Database::summon()->select_perfect()->from('community_homes')->where("`cid` = ".$profile['id'])->execute('fetchArray');
			Page::summon()->set('spaces',$spaces);
			Page::summon()->set('lastspace',$spaces[count($spaces)-1]['id']);
			Page::summon()->set('space_count', count($spaces));
			Page::summon()->set('homes',$homes);
			Page::summon()->set('home_count', count($homes));
			if(isUserLoggedIn()){
				$watched = Database::summon()->select_one()->from('user_combooks')->where("user = ".u('id')." AND community = ".$profile['id'])->execute('fetchArray');
				Page::summon()->set('watched', $watched);
				$kudoed = Database::summon()->select_one()->from('kudos')->where("user = ".u('id')." AND profile = ".$profile['prof_id'])->execute('fetchArray');
				Page::summon()->set('kudoed', $kudoed);
			}
			$plan = Database::summon()->select()->from('plans')->where("`id` = ".$prof['plan'])->execute('fetchArray');
			$features = Database::summon()->select_perfect()->from('plan_feature_matches p LEFT JOIN mhs_features f ON f.id = p.feature')->where("`plan` = ".$prof['plan'])->execute('fetchArray');
			$fdata = array();
			for($d=0;$d<count($features);$d++) {
				$fdata[($features[$d]['name'])] = 1;
			}
			Page::summon()->set('plan_info',$plan);
			Page::summon()->set('plan',$fdata);
			
			$company = Database::summon()->select()->from('companies')->where('id = '.strval($profile['company']))->execute('fetchArray');
			if($company['name'] != ""){
				$company_data = Database::summon()->select_perfect()->from('company_data')->where('cid = '.$company['id'])->execute('fetchArray');
				$company['data'] = array();
				for($x=0;$x<count($company_data);$x++){
					$company['data'][$company_data[$x]['name']] = $company_data[$x]['value'];
				}
				Page::summon()->set('company',$company);
			}

			/* $slides = array(
				array('id' => 1, 'cover' => "http://mhsamerica.metachrys.com/imgstorage/silverspur-cover.png", 'cover_position' => "top left"),
				array('id' => 2, 'cover' => "http://mhsamerica.metachrys.com/imgstorage/silverspur-cover.png", 'cover_position' => "center center"),
				array('id' => 3, 'cover' => "http://mhsamerica.metachrys.com/imgstorage/silverspur-cover.png", 'cover_position' => "bottom right")
			); */
			$slides = Database::summon()->select_perfect()->from('profile_covers')->where("`prof` = ".$profile['prof_id'])->limit(5)->execute('fetchArray');
			if($slides) {Page::summon()->set('slides', $slides);}
			//Page::summon()->set('jquery', "jquery-1.7.2.min.js");
		}else{ /* CONTRACTORS */
			$datas = Database::summon()->select_perfect()->from('professional_data')->where("`pid` = ".$profile['id'])->execute('fetchArray');
			$data = array();
			for($x=0;$x<count($datas);$x++) {
				$data[($datas[$x]['name'])] = $datas[$x]['value'];
			}
			Page::summon()->set('data',$data);
			if(isUserLoggedIn()){
				$watched = Database::summon()->select_one()->from('user_probooks')->where("user = ".u('id')." AND professional = ".$profile['id'])->execute('fetchArray');
				Page::summon()->set('watched', $watched);
				$kudoed = Database::summon()->select_one()->from('kudos')->where("user = ".u('id')." AND profile = ".$profile['prof_id'])->execute('fetchArray');
				Page::summon()->set('kudoed', $kudoed);
			}
			$plan = Database::summon()->select()->from('plans')->where("`id` = ".$prof['plan'])->execute('fetchArray');
			$features = Database::summon()->select_perfect()->from('plan_feature_matches p LEFT JOIN mhs_features f ON f.id = p.feature')->where("`plan` = ".$prof['plan'])->execute('fetchArray');
			$fdata = array();
			for($d=0;$d<count($features);$d++) {
				$fdata[($features[$d]['name'])] = 1;
			}
			Page::summon()->set('plan_info',$plan);
			Page::summon()->set('plan',$fdata);
		}
		Page::summon()->set('title',$profile['title']);
		Page::summon()->set('advert',false);
		Page::summon()->set('nobar',true);
		$city = Database::summon()->select_one()->from('cities')->where("`id` = ".$profile['city'])->execute('fetchArray');
		$county = Database::summon()->select_one()->from('counties')->where("`id` = ".$profile['county'])->execute('fetchArray');
		$state = Database::summon()->select_one()->from('states')->where("`id` = ".$city['state'])->execute('fetchArray');
		Page::summon()->set('city',$city);
		Page::summon()->set('county',$county);
		Page::summon()->set('state',$state);
	}
	function hook_renderer_end() {
		if($_GET['cmd'] == "email") {
			$this->setTemplate("profile-email.tpl");
		}elseif($this->_profiletype == "communities"){
			$this->setTemplate("profile-community.tpl");
		}else{
			$this->setTemplate("profile-professional.tpl");
		}
	}
}

?>