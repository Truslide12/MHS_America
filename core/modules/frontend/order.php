<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");
//Page::summon()->set('title',"Business Profile Plans");

class Module_Order extends Module {
	function initialize() {
		$actions = array('login','details','payment','confirmation');
		if($_GET['id'] && in_array($_GET['id'],$actions)){
			$this->_subpage = $_GET['id'];
		}else{
			$this->_subpage = "login";
		}

		if(is_numeric($_GET['plan']) && intval($_GET['plan']) > 0) {
			$pland = "?plan=".$_GET['plan'];
			$plan = intval($_GET['plan']);	
		}else{
			$pland = "";
			$plan = 0;
		}

		if($this->_subpage == "login" && isUserLoggedIn()) {
			header("Location: /order/details".$pland);die();
		}elseif($this->_subpage != "login" && !isUserLoggedIn()) {
			header("Location: /order/login".$pland);die();
		}
		$action = "default";
		if($this->_subpage == "details"){
			$types = array('community','professional');
			if($_GET['type'] != "" && in_array($_GET['type'],$types)){
				$businesstype = $_GET['type'];
			}else{
				$businesstype = "community";
			}
			$dactions = array('new','existing');
			if($_GET['action'] && in_array($_GET['action'],$dactions)){
				$action = $_GET['action'];
			}
			if($_POST['action'] && in_array($_POST['action'],$dactions)){
				$action = $_POST['action'];
			}
			if($action == "default") {
				$prefix = fetch_table_prefix();
				$profiles = fetch_profiles();
				$proftypes = array('communities','professionals');
				$proftype = array('community','professional');
				$profidtype = array('cid','pid');
				for($x=0;$x<count($profiles);$x++) {
					$profiles[$x]['data'] = Database::summon()->select()->from($proftypes[$profiles[$x]['type']])->where('id = '.$profiles[$x]['link'])->execute('fetchArray');
					$datas = Database::summon()->select()->from($proftype[$profiles[$x]['type']]."_data")->where($profidtype[$profiles[$x]['type']].' = '.$profiles[$x]['link'].' AND (name = "cover" OR name = "cover_position")')->execute('fetchArray');
					$profiles[$x]['planinfo'] = fetch_profile_plan($profiles[$x]['plan']);
					$profiles[$x]['planfeatures'] = fetch_plan_features($profiles[$x]['plan']);
					for($l=0;$l<count($datas);$l++) {
						$profiles[$x]['data'][($datas[$l]['name'])] = $datas[$l]['value'];
					}
				}
				Page::summon()->set('profiles',$profiles);
			}
		}elseif($this->_subpage == "payment") {
			if($_GET['pid']){
				$proftypes = array('communities','professionals');
				$proftype = array('community','professional');
				$profidtype = array('cid','pid');
				$profile = fetch_profile($_GET['pid']);
				if($profile['id'] > 0){
					$datas = Database::summon()->select_perfect()->from($proftype[$profile['type']]."_data")->where($profidtype[$profile['type']].' = '.$profile['link'].' AND (name = "cover" OR name = "cover_position")')->execute('fetchArray');
					for($l=0;$l<count($datas);$l++) {
						$profile['data'][($datas[$l]['name'])] = $datas[$l]['value'];
					}
					Page::summon()->set('profile',$profile);
				}
			}else{
				header("Location: /order/details".$pland);die();
			}
		}

		Page::summon()->set('tab',$this->_subpage);
		Page::summon()->set('plan',$plan);
		Page::summon()->set('action',$action);
		Page::summon()->set('businesstype',$businesstype);
	}
	function hook_renderer_end() {
		$this->setTemplate("order-".$this->_subpage.".tpl");
	}
}

?>