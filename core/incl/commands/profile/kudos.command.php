<?php

class Command_Profile_Kudos extends Listener {
	function action_profile_kudos() {
		$profile = Module::getVar('profile');
		if(isUserLoggedIn()) {
			$ckudos = Database::summon()->select()->from('kudos')->where("`user` = ".u('id')." AND `profile` = ".$profile['prof_id'])->execute('fetchArray');
			if(empty($ckudos)) {
				$handle = Database::summon()->getHandle();
				if(@mysql_query("INSERT INTO `mhs_kudos`(`user`,`profile`,`timestamp`) VALUES (".u('id').", ".$profile['prof_id'].", ".time().")", $handle)) {
					//Well, it's done :P
				}
			}
		}
		header("Location: ".s('domain')."/".$profile['prof_id']."/".$profile['username']);
	}
	function action_profile_unkudos() {
		$profile = Module::getVar('profile');
		if(isUserLoggedIn()) {
			$cwatch = Database::summon()->select()->from('kudos')->where("`user` = ".u('id')." AND `profile` = ".$profile['prof_id'])->execute('fetchArray');
			if($cwatch !== false) {
				if(Database::summon()->delete()->from('kudos')->where("`user` = ".u('id')." AND `profile` = ".$profile['prof_id'])->execute()) {
					//Well, it's done :P
				}
			}
		}
		header("Location: ".s('domain')."/".$profile['prof_id']."/".$profile['username']);
	}
}



?>
