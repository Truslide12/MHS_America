<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
defined('IS_ADMINCP') or die("Do you even admin, bro?");
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("./incl/user/models/config.php");
//if (!securePage($_SERVER['PHP_SELF'])){die();}
//require_once("models/header.php");

//include("left-nav.php");
Page::summon()->set('title',"Dashboard");

//Page::summon()->set('homebooks', Database::summon()->select_perfect()->from('user_homebooks')->where('user = '.u('id')));
//Page::summon()->set('spacebooks', Database::summon()->select_perfect()->from('user_spacebooks')->where('user = '.u('id')));
//Page::summon()->set('probooks', Database::summon()->select_perfect()->from('user_probooks')->where('user = '.u('id')));


if(1==2) { /* DISABLED------------------------------------------------------------------------------------------- */
$probooks = Database::summon()->select_perfect()->from('user_probooks')->where('user = '.u('id'))->execute('fetchArray');
$profbks = array();
for($x=0; $x< count($probooks);$x++) {
	$profile = Database::summon()->select()->from('professionals')->where('id = '.$probooks[$x]['professional'])->execute('fetchArray');
	$profile['profile'] = Database::summon()->select()->from('profiles')->where("link = ".$probooks[$x]['professional']." AND type = 1")->execute('fetchArray');
	$profbks[] = $profile;
}
Page::summon()->set('probooks',$profbks);

$combooks = Database::summon()->select_perfect()->from('user_combooks')->where('user = '.u('id'))->execute('fetchArray');
$commbks = array();
for($x=0; $x< count($combooks);$x++) {
	$profile = Database::summon()->select()->from('communities')->where('id = '.$combooks[$x]['community'])->execute('fetchArray');
	$profile['profile'] = Database::summon()->select()->from('profiles')->where("link = ".$combooks[$x]['community']." AND type = 0")->execute('fetchArray');
	/* Read / Unread Home Notification Counter */
	$profile['home_count'] = Database::summon()->select_perfect("id")->from('community_homes')->where('cid = '.$combook[$x]['community'])->execute('fetchCount');
	if($profile['home_count'] == 0){
		$profile['new']['homes'] = -1;
	}else{
		$profile['home_viewed'] = Database::summon()->select_one()->from('last_seen')->where("`user` = ".u('id')." AND `cid` = ".$combooks[$x]['community'])->execute('fetchArray');
		if(!$profile['home_viewed']['count']) {
			$profile['new']['homes'] = $profile['home_count'];
			if(Database::summon()->insert_into('last_seen')->set(array('user','cid','timestamp'),array(u('id'),$combook[$x]['community'],time()))->execute('returnId')){
				/* yay */
			}
		}elseif($profile['home_count'] != $profile['home_viewed']['count']) {
			$profile['new']['homes'] = $profile['home_count'] - $profile['home_viewed'];
			if(Database::summon()->update('last_seen')->set(array('user','cid','timestamp'),array(u('id'),$combook[$x]['community'],time()))->execute()){
				/* yay */
			}
		}else{
			$profile['new']['homes'] = 0;
		}
	}
	//$profile['homes'] = Database::summon()->select("COUNT(id)")->from('community_homes')->where('c');
	$commbks[] = $profile;
}
Page::summon()->set('combooks',$commbks);

$stufff = Database::summon()->getLogin();
$prefix = $stufff['table_prefix'];
unset($stufff);
$profiles = Database::summon()->select_perfect("p.*, m.owner")->from('profile_user_matches m LEFT JOIN '.$prefix.'profiles p ON m.profile = p.id')->where('m.user = '.u('id'))->execute("fetchArray");
Page::summon()->set('profiles',$profiles);
} /* DISABLED------------------------------------------------------------------------------------------- */
?>