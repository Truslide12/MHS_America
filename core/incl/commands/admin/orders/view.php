<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");
Page::summon()->set('stylesheet','user-profile');
Page::summon()->set('libraries',array('font-awesome'));

if($_GET['item'] && is_numeric($_GET['item'])) {
	$order = Database::summon()->select_one()->from('orders')->where('id = '.$_GET['item'])->execute('fetchArray');
	if(empty($order) || !$order){header('Location: /orders');die();}
	$profile_user = Database::summon()->select_one()->from('users')->where('id = '.$order['uid'])->execute('fetchArray');
	$profile_user['city_info'] = Database::summon()->select()->from('cities')->where('id = '.$profile_user['city'])->execute('fetchArray');
	$profile_user['state_info'] = Database::summon()->select()->from('states')->where('id = '.$profile_user['state'])->execute('fetchArray');
}else{
	header('Location: /orders');die();
}

function after_smarty_view() {
	global $smarty,$order,$profile_user;
	$smarty->assign('order',$order);
	$smarty->assign('profile',$profile_user);
}

?>