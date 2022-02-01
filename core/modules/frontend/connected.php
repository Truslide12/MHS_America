<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 

class Module_Connected extends Module {
	public $_subpage = "";
	public $_cmd = "";
	
	function initialize() {
		Page::summon()->set('advert',false);

		/* Use the `commands` system for the subpages */
		$subpages = array('mobile','web','integration');
		if(in_array($_GET['id'],$subpages)) {
			$this->_subpage = $_GET['id'];
			$this->pushState($this->_subpage);
			$this->_subpage = "_".$this->_subpage;
			if($_GET['cmd'] == "api"){$this->_cmd = "_".$_GET['cmd'];}
		}
	}
 
	function hook_renderer_end() {
		$this->setTemplate("frontend_connected".$this->_subpage.$this->_cmd.".tpl");
	}
}
 
?>
