<?php

class Command_Profile_Edit extends Listener {
	function action_profile_edit() {
		if(isUserLoggedIn()) {
			$ceditor = Module::getVar('ceditor');
			if(!empty($ceditor)) {
				Module::setVar('editmode',true);
			}
		}
	}
	function action_profile_edit_save() {
		/* Save Profile :3 */
		if (!empty($_POST) && $editmode == true) {
		//echo('<pre>');print_r($_POST);echo('</pre>');
			if($proftype == "communities"){
				$curdata_q = Database::summon()->select()->from('community_data')->where('cid = '.strval($profile['id']))->execute('fetchArray');
				$curdata = array();
				for($x=0;$x<count($curdata_q);$x++) {
					$curdata[$curdata_q['name']] = $curdata_q['value'];
				}
				$newdata = $_POST['data'];
				echo("<pre>");print_r($newdata);echo("</pre>");
				/* Information */
				chkchg('address');
				chkchg('zipcode');
				chkchg('manager');
				chkchg('phone');
				chkchg('fax');
				chkchg('email');
				
				/* Amenities */
				chkchg('pool',true);
				chkchg('clubhouse',true);
				chkchg('laundry',true);
				chkchg('playground',true);
				chkchg('basketball',true);
				chkchg('tennis',true);
				chkchg('casino',true);
				chkchg('billiards',true);
				chkchg('rec',true);
				chkchg('gym',true);
				
				/* Features */
				chkchg('senior',true);
				chkchg('pets',true);
				chkchg('gated',true);
				chkchg('handicap',true);
				chkchg('neighborhood',true);
				chkchg('scenic',true);
				chkchg('spaces');
				chkchg('rent');
				echo("<pre>");print_r($curdata);echo("</pre>");
				
				/* Carousel Photos */
				$photo1data = "";$photo2data = "";$photo3data = "";
				if($_POST['photo1'] != "")
					$photo1data = base64_decode(substr($_POST['photo1'],strpos($_POST['photo1'],",")+1));
				
				if($_POST['photo2'] != "")
					$photo2data = base64_decode(substr($_POST['photo2'],strpos($_POST['photo2'],",")+1));
				
				if($_POST['photo3'] != "")
					$photo3data = base64_decode(substr($_POST['photo3'],strpos($_POST['photo3'],",")+1));
				
			}elseif($proftype == "professionals") {
				/* Database::summon()->select()->from('community_data') */
			}
		}
	}
}

function canedit($var) {
	$list = array('address','zipcode','manager','phone','fax','email','pool','clubhouse','laundry','playground','basketball',
	'tennis','casino','billiards','rec','gym','senior','pets','gated','spaces','handicap','rent','scenic','neighborhood');
	return in_array($var, $list);
}

function chkchg($name,$binary = false) {
	global $newdata,$curdata,$profile,$proftype;
	if(($name != "" || $binary == true) && canedit($name) && $newdata[$name] != $curdata[$name] && (intval($newdata[$name]) === 0 || intval($newdata[$name]) === 1 || !$binary)) {
		//$curdata[$name] = $newdata[$name];
		if($proftype == "communities"){
			$d = 'community_data';
		}elseif($proftype == "professionals") {
			$d = 'professional_data';
		}
		Database::summon()->update($d)->set('`value`',$newdata[$name])->where("`name` = '".$name."' AND `cid` = ".strval($profile['id']))->execute();
	}
}

?>
