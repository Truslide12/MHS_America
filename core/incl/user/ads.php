<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he is not logged in
if(!isUserLoggedIn()) { header("Location: /account/login"); die(); }

$company = Database::summon()->select()->from('companies')->where('id = '.strval(u('company')))->execute('fetchArray');
$company_match = Database::summon()->select_one()->from('company_user_matches')->where('cid = '.$company['id'].' AND uid = '.u('id'))->execute('fetchArray');
if($company['name'] != ""){
	$is_company_user = true;
	if($company_match['admin'] == 1) { $is_company_admin = 1; }
	$company_data = Database::summon()->select_perfect()->from('company_data')->where('cid = '.$company['id'])->execute('fetchArray');
	$company['data'] = array();
	for($x=0;$x<count($company_data);$x++){
		$company['data'][$company_data[$x]['name']] = $company_data[$x]['value'];
	}
	Page::summon()->set('company',$company);
	Page::summon()->set('is_company_user',$is_company_user);
	Page::summon()->set('is_company_admin',$is_company_admin);
}

Page::summon()->set('results',resultBlock($errors,$successes));

?>
