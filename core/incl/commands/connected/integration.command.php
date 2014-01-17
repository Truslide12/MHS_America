<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Command_Connected_Integration extends Listener {
	function action_connected_api() {
		if($_GET['p'] != ""){
			$filenamed = file_exists("apidocs/".strtolower($_GET['p']).".derp");
		}
		if(!$filenamed){
			$file = "index";
		}else{
			$file = strtolower($_GET['p']);
		}
		$filepath = "apidocs/".$file.".derp";
		$contents = file_get_contents($filepath);
		Page::summon()->set('contents',$contents);
		Page::summon()->set('file',$file);
		$crumbs = explode('/',$file);
		$file = array_pop($crumbs);
		$title_crumbs = array_map("ucwords",$crumbs);
		Page::summon()->set('crumbs',$crumbs);
		Page::summon()->set('title',ucwords($file));
	}
}

?>
