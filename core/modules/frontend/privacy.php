<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_Privacy extends Module {
	function initialize() {
		Page::summon()->set('advert',false);
	}
}

?>
