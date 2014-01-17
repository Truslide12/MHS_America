<?php

class Command_Ideas_Votes extends Listener {
	function action_ideas_voteup() {
		if(isUserLoggedIn()) {
			$ckudos = Database::summon()->select()->from('idea_votes')->where("`user` = ".u('id')." AND `idea` = ".intval($_GET['id']))->execute('fetchArray');
			if(empty($ckudos)) {
				$handle = Database::summon()->getHandle();
				if(@mysql_query("INSERT INTO `".fetch_table_prefix()."idea_votes`(`user`,`idea`,`timestamp`) VALUES (".u('id').", ".intval($_GET['id']).", ".time().")", $handle)) {
					//Well, it's done :P
				}
			}
		}
		header("Location: ".s('domain')."/ideas/".intval($_GET['id']));
	}
}

?>
