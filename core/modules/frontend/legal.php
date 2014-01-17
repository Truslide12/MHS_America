<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_Legal extends Module {
	function initialize(){
		Page::summon()->set('advert',false);
	}
}
 
?>
