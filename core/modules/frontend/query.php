<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Query extends Module {
	function initialize() {
		if($_POST['city'] && $_POST['state']) {
			$_GET['city'] = $_POST['city'];
			$_GET['state'] = $_POST['state'];
		}
		if($_GET['city'] != "" && $_GET['state'] > 0) {
			$query = "`title` = \"".addslashes($_GET['city'])."\" AND `state` = ".strval($_GET['state']); 
			$fetch = Database::summon()->select_perfect()->from('cities')->where("`title` = '".addslashes($_GET['city'])."' AND `state` = ".strval($_GET['state']))->execute('fetchArray');
			if($fetch === false || count($fetch) == 0) {
				header("Location: /");
				exit;
			}
			switch(count($fetch)) {
				case 1:
					$state = Database::summon()->select_one("id,abbr")->from('states')->where('id = '.strval($_GET['state']))->execute('fetchArray');
					$county = Database::summon()->select_one("id,name")->from('counties')->where('(id = '.$fetch[0]['county'].' OR id = '.$fetch[0]['countyb'].' OR id = '.$fetch[0]['countyc'].' OR id = '.$fetch[0]['countyd'].' OR id = '.$fetch[0]['countye'].') AND state = '.strval($state['id']))->execute('fetchArray');
					header('Location: /locale/'.$state['abbr'].'/'.$county['name'].'/'.$fetch[0]['name']);
					die();
				default:
					//Handle disambiguation
			}
		}
		header("Location: /");
		exit;
	}
}

?>