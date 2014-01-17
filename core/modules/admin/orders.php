<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");

class Module_Orders extends Module {
	function initialize() {
		Module::summon()->setCommands('list', array('list','new','edit','remove','view'));
		Module::summon()->runCommand();
	}
	function hook_command_run() {
		Page::summon()->set('command',$this->_subpage);
	}
	function hook_renderer_end() {
		$this->setTemplate("orders-".$this->_subpage.".tpl");
		if(function_exists('after_smarty_'.$this->_subpage)) {call_user_func('after_smarty_'.$this->_subpage);}
	}
}

?>