<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he is not logged in
if(!isUserLoggedIn()) { header("Location: /account/login"); die(); }
$headline = "";

$planlist = Database::summon()->pull('plans')->where('1=1 ORDER BY id DESC')->execute("fetchArray");
Page::summon()->set('planlist',$planlist);

$commands = array('renew','methods');
if(!empty($_GET['action']) && in_array($_GET['action'], $commands)){
	$action = $_GET['action'];
}

if($action == "renew") {
	//Edit here
	$profe = fetch_profile(intval($_GET['profile']),true);
	Page::summon()->set('profile',$profe);
	$headline = "Renew";
}

if($action == "methods") {
	//Edit here
	$headline = "Payment Methods";
}

if(!$action){ /* NO ACTION :3 */
$prefix = fetch_table_prefix();
$profiles = fetch_profiles();
$proftypes = array('communities','professionals');
$proftype = array('community','professional');
$profidtype = array('cid','pid');
for($x=0;$x<count($profiles);$x++) {
	$profiles[$x]['data'] = Database::summon()->select()->from($proftypes[$profiles[$x]['type']])->where('id = '.$profiles[$x]['link'])->execute('fetchArray');
	$datas = Database::summon()->select()->from($proftype[$profiles[$x]['type']]."_data")->where($profidtype[$profiles[$x]['type']].' = '.$profiles[$x]['link'].' AND (name = "cover" OR name = "cover_position")')->execute('fetchArray');
	$profiles[$x]['planfeatures'] = fetch_plan_features($profiles[$x]['plan']);
	for($l=0;$l<count($datas);$l++) {
		$profiles[$x]['data'][($datas[$l]['name'])] = $datas[$l]['value'];
	}
	$profiles[$x]['plandata'] = fetch_profile_plan($profiles[$x]['id']);
}

$action = ((!empty($_POST) && (empty($profiles) || $_GET['action'] == "new")) || $_GET['action'] == "new") ? 'wizard' : 'manage';
if(empty($profiles)) {$action = 'wizard';}

Page::summon()->set('profiles',$profiles);
if($action == "wizard") { /* Starswirl the Bearded */
	header("Location: /account/profile");die();
}else{ /* Twilight Sparkle */
	$headline = "Manage Profile Billing";
}

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

} /* End NO ACTION (Wizard /Manage) */
Page::summon()->set('landing',$action);
Page::summon()->set('headline',$headline);
Page::summon()->set('title',$headline);
Page::summon()->set('results',resultBlock($errors,$successes));
?>
