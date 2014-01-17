<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Derpy extends Module {
	function initialize() {
		$commands = array('cities','counties','states','ponies');
		if(in_array($_GET['id'], $commands)) {
			$this->_subpage = $_GET['id'];
		}else{
			//Main page
			$this->_subpage = "states";
		}
		$this->pushState($this->_subpage);
	}
	function hook_renderer_end() {
		$this->setTemplate('literal.tpl');
	}
}

 ?>
