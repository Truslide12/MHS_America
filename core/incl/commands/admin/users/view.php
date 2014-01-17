<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");
Page::summon()->set('stylesheet','user-profile');
Page::summon()->set('libraries',array('font-awesome'));

class Command_Admin_Users_View extends Listener {
	function action_users_view() {
		if($_GET['item'] && is_numeric($_GET['item'])) {
			$profile_user = Database::summon()->select_one()->from('users')->where('id = '.$_GET['item'])->execute('fetchArray');
			if(empty($profile_user) || !$profile_user){header('Location: /users');die();}
			
			$profile_user['city_info'] = Database::summon()->select()->from('cities')->where('id = '.$profile_user['city'])->execute('fetchArray');
			$profile_user['state_info'] = Database::summon()->select()->from('states')->where('id = '.$profile_user['state'])->execute('fetchArray');
			Module::set('profile_user', $profile_user);
		}else{
			header('Location: /users');die();
		}
	}
}

function hook_renderer_plugin_view() {
	Module::renderer()->assign('profile',Module::get('profile_user'),true);
}

?>