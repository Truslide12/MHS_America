<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");
Page::summon()->set('stylesheet','user-profile');
Page::summon()->set('libraries',array('font-awesome'));

class Command_Admin_Users_Remove extends Listener {
	function action_users_remove() {
		
	}
}

?>