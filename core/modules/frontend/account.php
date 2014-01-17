<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Module_Account extends Module {
	function initialize() {
		Page::summon()->set('title',"Front Page");
		Page::summon()->set('meta_keywords',"mobile home spaces, mobile home lots, mobile home movers, mobile home specialists, mobile home experts, mobile home parks, mobile home vacancy, mobile home land, mobile home electricians, mobile home technicians");
		Page::summon()->set('meta_title', "Search Available Spaces and Services");
		Page::summon()->set('dublin_subject', "Mobile home spaces, contractors, and services");
		Page::summon()->set('dublin_creator', "Kage-Mykel Edwards");
		Page::summon()->set('advert', false);

		if(intval($_POST['step']) > 0){
			Page::summon()->set('step',intval($_POST['step']));
		}elseif(intval($_GET['step']) > 0){
			Page::summon()->set('step',intval($_GET['step']));
		}else{
			Page::summon()->set('step',1);
		}

		$actpages = array(
		'profile','settings',
		'login','register','logout','forgot-password',
		'activate-account','resend-activation','ads','billing','connected'
		);

		if($_GET['id'] && in_array($_GET['id'], $actpages)) {
			$this->_subpage = $_GET['id'];
		}else{
			//Main page
			$this->_subpage = "account";
		}

		require_once "./incl/user/".$this->_subpage.".php";
	}

	function hook_renderer_end() {
		$this->setTemplate("account-".$this->_subpage.".tpl");
	}

}
 ?>
