<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");


class Command_Connected_Mobile extends Listener {
	function action_connected_mobile() {
		$commands = array('ios','android','ubuntu');
		if(in_array($_GET['cmd'],$commands)) {
			Module::summon()->_subpage .= "_".$_GET['cmd'];
		}
	}
}

?>