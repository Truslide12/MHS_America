<?php
$sector = "frontend";
define('IGLOO',1);
define('LITERAL',1);
chdir('../core');
include "./settei-core.php";
if(check_email_address($_POST['email'])){
	if(is_int($_POST['profile']) && $_POST['profile'] > 0) {
		$prof = Database::summon()->select_one()->from('profiles')->where("`id` = ".$_POST['profile'])->execute('fetchArray');
		if(!$prof['id']){
			die("FAILED AT ID");
		}
		$tables = array('community_data','professional_data');
		$table = $tables[$prof['type']];
		$email = Database::summon()->select_one()->from($table)->where("`cid` = ".$prof['link']." AND `name` = 'email'")->execute('fetchArray');
		send_mail($_POST['name']." <".$_POST['email'].">",$email['value'],"Message from ".$_POST['name'],$_POST['message']) or die("FAILED");
	}else{
		send_mail($_POST['name']." <".$_POST['email'].">","paul@mhsamerica.com","MHS America - Message from ".$_POST['name'],$_POST['message']) or die("FAILED");
	}
}
?>
