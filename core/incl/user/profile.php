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
if($_POST['action'] == "new") {$_GET['action'] == "new";}

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

$commands = array('edit','plan','analytics');
if($_GET['rtn'] == 'billing'){
	Page::summon()->set('returnpage',$return);
}
if(!empty($_GET['action']) && in_array($_GET['action'], $commands)){
	$action = $_GET['action'];
}

if($action == "edit") {
	//Edit here
	$headline = "Edit Profile";
	$profe = fetch_profile(intval($_GET['profile']));
	Page::summon()->set('profile',$profe);
}

if($action == "plan") {
	//Edit here
	$headline = "Profile Plan Details";
	$profe = fetch_profile(intval($_GET['profile']),true);
	Page::summon()->set('profile',$profe);
	$prefix = fetch_table_prefix();
	$planlist = Database::summon()->pull('plans')->execute("fetchArray");
	for($x=0;$x<count($planlist);$x++) {
		$planlist[$x]['features'] = Database::summon()->pull('plan_feature_matches m LEFT JOIN '.$prefix.'features f ON m.feature = f.id')->where('plan = '.$planlist[$x]['id'])->execute("fetchArray");
	}
	Page::summon()->set('planlist',$planlist);
}

if($action == "analytics") {
	//Edit here
	$headline = "Analytics";
}

if(!$action || $_GET['action'] == "new"){ /* NO ACTION :3 */
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
}

$action = ((!empty($_POST) && (empty($profiles) || $_GET['action'] == "new")) || $_GET['action'] == "new" || $_POST['action'] == "new") ? 'wizard' : 'manage';
if(empty($profiles)) {$action = 'wizard';}

Page::summon()->set('profiles',$profiles);
if($action == "wizard") { /* Starswirl the Bearded */
	$errors = array();
	$successes = array();
	//if(intval(Page::summon()->get('step')) == 1){
		//Nothing
	//}else
	if(intval(Page::summon()->get('step')) > 1){ /* Applies to steps 2 and 3 */
		Page::summon()->set('businessname', addslashes($_POST['title']));
		Page::summon()->set('bsnsstate', intval($_POST['state']));
		Page::summon()->set('bsnscounty', intval($_POST['county']));
		Page::summon()->set('bsnscity', intval($_POST['city']));
		Page::summon()->set('businesstype', $_POST['type']);
		Page::summon()->set('state',Database::summon()->select('id,abbr,suffix')->from('states')->where('id = '.$_POST['state'])->execute('fetchArray'));
		Page::summon()->set('county',Database::summon()->select('id,title,hidesuffix')->from('counties')->where('id = '.$_POST['county'].' AND state = '.$_POST['state'])->execute('fetchArray'));
		Page::summon()->set('city',Database::summon()->select('id,title')->from('cities')->where('id = '.$_POST['city'])->execute('fetchArray'));
	}
	if(intval(Page::summon()->get('step')) > 2){ /* Applies to step 3 (beyond?) */
		
	}
}else{ /* Twilight Sparkle */
	$headline = "Manage Profiles";
}

} /* End NO ACTION (Wizard /Manage) */
Page::summon()->set('landing',$action);
Page::summon()->set('headline',$headline);
Page::summon()->set('results',resultBlock($errors,$successes));
?>
