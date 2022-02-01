<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Ideas extends Module {
	function initialize() {
		Page::summon()->set('advert', false);
		Page::summon()->set('title', "Ideas and Suggestions");
		$perpage = 10;
		$offset = -1;
		if(is_int($_GET['p'])) $offset = (int) $_GET['p'];
		$offset--;
		$ideas = Database::summon()->select_perfect()->from('ideas')->limit($perpage, $offset*$perpage)->execute('fetchArray');
		for($x=0;$x<count($ideas);$x++) {
			$ideas[$x]['userdata'] = Database::summon()->select_one()->from('users')->where('id = '.$ideas[$x]['user'])->execute('fetchArray');
			$ideas[$x]['upcount'] = Database::summon()->select('id')->from('idea_votes')->where('idea = '.$ideas[$x]['id'])->execute('fetchCount');
			$ideas[$x]['downcount'] = Database::summon()->select('id')->from('idea_drops')->where('idea = '.$ideas[$x]['id'])->execute('fetchCount');
		}
		Page::summon()->set('ideas', $ideas);
	}
}

?>