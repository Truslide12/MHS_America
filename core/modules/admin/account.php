<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");

class Module_Account extends Module {
	function initialize() {
		Page::summon()->set('advert', false);
		if(!$_POST['step']){
		Page::summon()->set('step',1);
		}else{
		Page::summon()->set('step',intval($_POST['step']));
		}
		$actpages = array(
		'account','settings','login','register','logout','forgot-password'
		);
		if($_GET['id'] && in_array($_GET['id'], $actpages)) {
			$this->_subpage = $_GET['id'];
		}else{
			//Main page
			$this->_subpage = "account";
		}
		require "./incl/user/admin/".$this->_subpage.".php";
	}
	function hook_renderer_end() {
		$this->setTemplate("account-".$this->_subpage.".tpl");
	}
}

?>