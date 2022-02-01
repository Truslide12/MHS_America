<?php

class Command_Home_Watch extends Listener {
	function action_home_watch() {
		$profile = Module::get('profile');
		if(isUserLoggedIn()) {
			if($profile['proftype'] == "communities"){
				$shrot = "com";
				$sharot = "community";
			}elseif($porfile['proftype'] == "professionals"){
				$shrot = "pro";
				$sharot = "professional";
			}
			$cwatch = Database::summon()->select()->from('user_'.$shrot.'books')->where("`user` = ".u('id')." AND `".$sharot."` = ".$profile['id'])->execute('fetchArray');
			if(empty($cwatch)) {
				$handle = Database::summon()->getHandle();
				if(@mysql_query("INSERT INTO `mhs_user_".$shrot."books`(`user`,`".$sharot."`,`timestamp`) VALUES (".u('id').", ".$profile['id'].", ".time().")",$handle)) {
					//Well, it's done :P
				}
			}
		}
		header("Location: ".s('domain')."/".$profile['prof_id']."/".$profile['username']);
	}
	function action_home_unwatch() {
		$profile = Module::get('profile');
		if(isUserLoggedIn()) {
			if($proftype == "communities"){
				$shrot = "com";
				$sharot = "community";
			}elseif($proftype == "professionals"){
				$shrot = "pro";
				$sharot = "professional";
			}
			$cwatch = Database::summon()->select()->from('user_'.$shrot.'books')->where("`user` = ".u('id')." AND `".$sharot."` = ".$profile['id'])->execute('fetchArray');
			if($cwatch !== false) {
				if(Database::summon()->delete()->from('user_'.$shrot.'books')->where("`user` = ".u('id')." AND `".$sharot."` = ".$profile['id'])->execute()) {
					//Well, it's done :P
				}
			}
		}
		if($_GET['return'] == "account"){
			header("Location: ".s('domain')."/account"); exit;
		}else{
			header("Location: ".s('domain')."/".$profile['prof_id']."/".$profile['username']); exit;
		}
	}
}

?>
