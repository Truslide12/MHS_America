<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Home extends Module {
	function initialize() {
		$commands = array('watch','unwatch','contact');
		if(in_array($_GET['id'], $commands)) {
			include "./incl/commands/home/".$_GET['id'].".command.php";
		}

		if($_GET['alpha']) {$_GET['id'] = alphaID($_GET['alpha'], true);}

		if(is_numeric($_GET['id'])) {
			$home = Database::summon()->select()->from('community_homes')->where('id = '.$_GET['id'])->execute('fetchArray');
			if($home) {
				Page::summon()->set('home',$home);
				$community = Database::summon()->select()->from('communities')->where('id = '.$home['cid'])->execute('fetchArray');
				$community['profile'] = Database::summon()->select()->from('profiles')->where('type = 0 AND link = '.$community['id'])->execute('fetchArray');
				$state = Database::summon()->select()->from('states')->where('id = '.$community['state'])->execute('fetchArray');
				$county = Database::summon()->select()->from('counties')->where('id = '.$community['county'])->execute('fetchArray');
				$city = Database::summon()->select()->from('cities')->where('id = '.$community['city'])->execute('fetchArray');
				$watchers = Database::summon()->select()->from('user_homebooks')->where("home = ".$home['id'])->execute('fetchCount');
				$watched = false;
				if(isUserLoggedIn() == true) {
					$wchkrow = Database::summon()->from('user_homebooks')->where("home = ".$home['id']." AND user = ".u('id'))->execute('fetchArray');
					if(is_array($wchkrow) && $wchkrow['id'] > 0) {
						$watched = true;
					}
				}
				$slides = Database::summon()->select_perfect()->from('community_home_slides')->where("hid = ".$home['id'])->execute('fetchArray');
				if(is_array($slides) && !empty($slides)) {
					Page::summon()->set('slides',$slides);
				}
				Page::summon()->set('community',$community);
				Page::summon()->set('state',$state);
				Page::summon()->set('county',$county);
				Page::summon()->set('city',$city);
				Page::summon()->set('watchers',$watchers);
				Page::summon()->set('watched',$watched);
			}
		}
		Page::summon()->set('advert',false);
	}
}

 ?>
