<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");

class Command_Admin_Users_List extends Listener {
	function action_users_list() {
		Page::summon()->set('stylesheet','user-list');
		Page::summon()->set('libraries',array('font-awesome'));
		$user_count = Database::summon()->select('id')->from('users')->execute('fetchCount');
		$cnt = 10;
		$page_count = ceil($user_count/$cnt);
		$p = (is_int($_GET['p']) && intval($_GET['p']) > 0 && intval($_GET['p']) <= $page_count) ? intval($_GET['p']) : 1;
		Page::summon()->set('current_page',$p);
		$x = ceil($p/5);
		switch($x){
			case 1:
				$pages = array($x, $x+1, $x+2, $x+3, $x+4);
				break;
			case (ceil($page_count/5)):
				$pages = array($x-4, $x-3, $x-2, $x-1, $x);
				break;
			default:
				$pages = array($x-2, $x-1, $x, $x+1, $x+2);
		}
		Page::summon()->set('pages',$pages);
		$p--;
		$users = Database::summon()->select()->from('users')->limit(strval($_GET['p']*$cnt).', '.strval($cnt))->execute('fetchArray');
		Page::summon()->set('users',$users);
		Page::summon()->set('user_count',$user_count);
		Page::summon()->set('page_count',$page_count);
	}
}

?>