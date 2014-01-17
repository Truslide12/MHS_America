<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");

class Module_Configuration extends Module {
	function initialize() {
		if($_POST['submitted'] == "true") {
			$osets_i = Database::summon()->select()->from('settings')->where("readonly = 0")->execute('fetchArray');
			$osets = array();
			for($x=0;$x<count($osets_i);$x++){
				$osets[$osets_i[$x]['name']] = $osets_i[$x]['value'];
				/* Push settings to database */
				if($_POST[$osets_i[$x]['name']] != $osets_i[$x]['value'] && $osets_i[$x]['name'] != "shutdown"){
					Database::summon()->update('settings')->set('value',addslashes($osets_i[$x]['value']))->where("name = '".$osets_i[$x]['name']."'")->execute();
				}
			}
		}
		$settz = Database::summon()->pull('settings')->execute('fetchArray');
		Page::summon()->set('libraries',array('uniform.default','select2','bootstrap.datepicker','font-awesome'));
		Page::summon()->set('stylesheet','form-showcase');
		Page::summon()->set('settings',$settz);
	}
	function hook_renderer_end() {
		$this->setTemplate("configuration.tpl");
	}
}

?>