<?php
/*************************************
 * Solidium PHP Real Estate Solution *
 * Copyright 2012 Kage-Mykel Edwards *
 *        All Rights Reserved.       *
 *-----------------------------------*
 *  Meta:   Main Configuration Core  *
 *                                   *
 *          /configity.php           *
 *************************************/
defined('IGLOO') or die("Twilight Sparkle does not approve.");

require_once "./incl/classes/Toro.php";
require_once "./incl/classes/module.class.php";
$module = strtolower($_GET['page']);
if(!$_GET['page'] || !file_exists("./modules/".$sector."/".$module.".php")) {
	$module = "welcome";
}
require_once "./modules/".$sector."/".$module.".php";
Module::summon($sector,$module);
if(!$ldefs) $ldefs = "home,contact";

/* Set Database Settings Here  */
$dbs = array();
$dbs['host'] = "localhost";
$dbs['user'] = "spaces_mhsaa";
$dbs['pass'] = "tlyou2020!murika";
$dbs['database'] = "spaces_mhs";
$dbs['table_prefix'] = "mhs_";

/* Now for the Geo database here  */
$geodbs = array();
$geodbs['host'] = "localhost";
$geodbs['user'] = "metachry_geouser";
$geodbs['pass'] = "geogeo123";
$geodbs['database'] = "metachry_geo2";
$geodbs['table_prefix'] = "";

$admin_directory = "."; //Just the name (no slashes 'n' dots) is sufficient

$cookielife = 30*60; //2 weeks - now 2 hours

$search_engines = array('googlebot','gigabot','bingbot','scrubby','baiduspider','yandexbot','speedy spider','lmspider','teoma','gsitecrawler');
$userag = strtolower($_SERVER['HTTP_USER_AGENT']);
$is_search = false;
for($x=0;$x<count($search_engines);$x++) {
	if(strpos($userag, $search_engines[$x]) !== false) {
		$is_search = true; break;
	}else{
		$is_search = false;
	}
}


require "./incl/classes/database.mysql-classic.class.php";

/* Now let us judge your settings with iron fist! */
$db_error = "";
$s = array();
if(Database::summon()->connect($dbs) === false){
	$db_error = Database::summon()->retrieveErrors();
}
if(is_array($db_error)){print_r($db_error);die(" I just don't know what went wrong.");}
/* If the script reaches this, thou hast passed judgement */

require "./php_fast_cache.php";
$settinz = phpFastCache::get("global_settings");
phpFastCache::$storage = "auto";

if($settinz == null) {
/* Site Information pulled from database (EDIT IN CONTROL PANEL) */
$setss = Database::summon()->select("*")->from("settings")->execute('fetchArray');
	if(!$setss){
		die("YOU MUST FIRST SET THE DATABASE INFORMATION BY EDITING THE CORE CONFIGURATION FILE. ~ Celestia");
	}else{
		if($settings) $beepity = $settings;
		foreach($setss as $settings){
			$s[$settings['name']] = $settings['value'];
		}
		$s['title'] = ($pagetitle != "") ? $pagetitle." - ".$s['title'] : $s['title'];
		//if(defined('IS_ADMINCP') == true){$s['domain'] = "http://".$_SERVER['SERVER_NAME'];}
		if(strpos($s['domain'],'http://') !== 0){$s['domain'] = "http://".$s['domain'];}
		$s['directory'] = dirname(__FILE__);
		if($beepity) $settings = $beepity;
		phpFastCache::set("global_settings",$s,600);
	}
}else{
	$s = $settinz;
}

/* EMERGENCY DOMAIN OVERRIDE - REMOVE THE // FROM THE BEGINNING OF THE FOLLOWING LINE AND SET THE CONTENTS OF THE QUOTES
 * AS A LAST RESORT TO FIX DOMAIN ISSUES IF YOU'VE LOST EVERYTHING INCLUDING THE CONTROL PANEL *
 * Don't include a trailing slash Example: http://www.example.com NOT http://www.example.com/  */

//$s['domain'] = "http://www.example.com";

/* --- CACHING SYSTEM CONTROL SWITCH --- */
/* - */ $s['disablecache'] = false; /* - */

require "./incl/classes/settings.class.php";

$year = date("Y");
$s['currentyear'] = $year;
$s['admin_dir'] = $admin_directory;
$sg = $s;
Settings::summon($s);

function file_list($d,$x){
	$le = array();
	foreach(array_diff(scandir($d),array('.','..')) as $f){
		if(is_file($d.'/'.$f) && eregi(strtolower($x).'$',strtolower($f)) !== false){
			$le[]=$f;
		}
	}
	return $le;
}

function bbcode_parse($string) {
		global $home;
        $tags = 'b|i|size|color|center|quote|url|img';
        while (preg_match_all('`\[('.$tags.')=?(.*?)\](.+?)\[/\1\]`', $string, $matches)) foreach ($matches[0] as $key => $match) {
            list($tag, $param, $innertext) = array($matches[1][$key], $matches[2][$key], $matches[3][$key]);
            switch ($tag) {
                case 'b': $replacement = "<strong>$innertext</strong>"; break;
                case 'i': $replacement = "<em>$innertext</em>"; break;
                case 'size': $replacement = "<span style=\"font-size: $param;\">$innertext</span>"; break;
                case 'color': $replacement = "<span style=\"color: $param;\">$innertext</span>"; break;
                case 'center': $replacement = "<div align=\"center\">$innertext</div>"; break;
                case 'quote': $replacement = "<blockquote>$innertext</blockquote>" . $param? "<cite>$param</cite>" : ''; break;
                case 'url': $replacement = '<a href="' . ($param? $param : $innertext) . "\">$innertext</a>"; break;
                case 'img':
                    list($width, $height) = preg_split('`[Xx]`', $param);
                    $replacement = "<img src=\"incl/uploads/".$home['id']."/$innertext\" " . (is_numeric($width)? "width=\"$width\" " : '') . (is_numeric($height)? "height=\"$height\" " : '') . '/>';
                break;
                case 'video':
                    $videourl = parse_url($innertext);
                    parse_str($videourl['query'], $videoquery);
                    if (strpos($videourl['host'], 'youtube.com') !== FALSE) $replacement = '<embed src="http://www.youtube.com/v/' . $videoquery['v'] . '" type="application/x-shockwave-flash" width="425" height="344"></embed>';
                    if (strpos($videourl['host'], 'google.com') !== FALSE) $replacement = '<embed src="http://video.google.com/googleplayer.swf?docid=' . $videoquery['docid'] . '" width="400" height="326" type="application/x-shockwave-flash"></embed>';
                break;
            }
            $string = str_replace($match, $replacement, $string);
        }
        return $string;
    }

function mobile_parse($string) {
		global $home;
        $tags = 'notmobile|mobile';
        while (preg_match_all('/\[('.$tags.')=?(.*?)\](.+?)\[\/\1\]/is', $string, $matches)) foreach ($matches[0] as $key => $match) {
            list($tag, $param, $innertext) = array($matches[1][$key], $matches[2][$key], $matches[3][$key]);
            switch ($tag) {
                case 'notmobile':
					if(defined('IS_MOBILE')){
						$replacement = "";
					}else{
						$replacement = $innertext;
					}
					break;
                case 'mobile':
					if(defined('IS_MOBILE')){
						$replacement = $innertext;
					}else{
						$replacement = "";
					}
					break;
            }
            $string = str_replace($match, $replacement, $string);
        }
        return $string;
    }
	
function showprice($price,$decimal=false){
	return Locale::summon()->get('moneyprefix').number_format(intval($price), ($decimal ? 2: 0), Locale::summon()->get('decimal'), Locale::summon()->get('thousand')).Locale::summon()->get('moneysuffix');
}


$nub = "./";
include("./incl/locale/united-states.locale.php");
$locale['file'] = "united-states.locale.php";
$locale['id'] = "united-states";

require "./incl/classes/locale.class.php";
Locale::summon()->initialize($locale['id']);
$lang = $sg['language'];
$langquery = "/";
$blogquery = "/";
include("./incl/lang/".$lang.".lang.php");
/* } */

//Specific Language Defines System
$ldefarr = explode(",", $ldefs);
if(is_array($ldefarr) && count($ldefarr) >= 1) {
	for($i=0;$i < count($ldefarr); $i++) {
		if(trim($ldefarr[$i]) != "" && file_exists($nub."incl/lang/".$lang."/".trim($ldefarr[$i]).".lang.php") === true) {
			include $nub."incl/lang/".$lang."/".$ldefarr[$i].".lang.php";
		}
	}
}
$language['uppercode'] = strtoupper($language['code']);

require "./incl/classes/language.class.php";
Language::summon($language,$l);

require "./incl/classes/images.class.php";

function diverse_array($vector) { 
    $result = array(); 
    foreach($vector as $key1 => $value1) 
        foreach($value1 as $key2 => $value2) 
            $result[$key2][$key1] = $value2; 
    return $result; 
}

if(defined('IS_ADMINCP') == true){$nub.= s('admin_dir')."/";}

require_once "./incl/user/models/config.php";
if (!securePage($_SERVER['PHP_SELF']) && !defined('IS_ADMINCP')){define('LULZ',1);}
if(isUserLoggedIn()){Database::summon()->storeUser($loggedInUser);}

/* Extra Necessary Functions */

function startsWith($haystack, $needle) {
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    $start  = $length * -1; //negative
    return (substr($haystack, $start) === $needle);
}

function check_email_address($email) {if(!eregi("^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,9})$", $email)){return false;}else{return true;}}

function greeting_text() {
	$b = time(); 
	$hour = date("g",$b);
	$m = date ("A", $b);
	if ($m == "AM"){
		if($hour == 12){return l('goodevening');}elseif ($hour < 4){return l('goodevening');}elseif($hour > 3){return l('goodmorning');}
	}elseif ($m == "PM"){
		if($hour == 12){return l('goodafternoon');}elseif ($hour < 7){return l('goodafternoon');}elseif ($hour > 6){return l('goodevening');}
	}
}

require "./incl/classes/page.class.php";

function l($var,$caps="") {
switch($caps){
	case "ucfirst":
		return ucfirst(strtolower(Language::summon()->get($var)));
	case "ucwords":
		return ucwords(strtolower(Language::summon()->get($var)));
	case "strtolower":
		return strtolower(Language::summon()->get($var));
	case "strtoupper":
		return strtoupper(Language::summon()->get($var));
	case "":
	default:
		return Language::summon()->get($var);
}}
function s($var,$caps="") {
switch($caps){
	case "ucfirst":
		return ucfirst(strtolower(Settings::summon()->get($var)));
	case "ucwords":
		return ucwords(strtolower(Settings::summon()->get($var)));
	case "strtolower":
		return strtolower(Settings::summon()->get($var));
	case "strtoupper":
		return strtoupper(Settings::summon()->get($var));
	case "":
	default:
		return Settings::summon()->get($var);
}}
function p($var,$caps="") {
switch($caps){
	case "ucfirst":
		return ucfirst(strtolower(Page::summon()->get($var)));
	case "ucwords":
		return ucwords(strtolower(Page::summon()->get($var)));
	case "strtolower":
		return strtolower(Page::summon()->get($var));
	case "strtoupper":
		return strtoupper(Page::summon()->get($var));
	case "":
	default:
		return Page::summon()->get($var);
}}
function u($var,$caps="") {
$userr = Database::summon()->getUser();
switch($caps){
	case "ucfirst":
		return ucfirst(strtolower($userr[$var]));
	case "ucwords":
		return ucwords(strtolower($userr[$var]));
	case "strtolower":
		return strtolower($userr[$var]);
	case "strtoupper":
		return strtoupper($userr[$var]);
	case "":
	default:
		return $userr[$var];
}}
function _l($var,$caps="") {
switch($caps){
	case "ucfirst":
		echo ucfirst(strtolower(Language::summon()->get($var)));
		break;
	case "ucwords":
		echo ucwords(strtolower(Language::summon()->get($var)));
		break;
	case "strtolower":
		echo strtolower(Language::summon()->get($var));
		break;
	case "strtoupper":
		echo strtoupper(Language::summon()->get($var));
		break;
	case "":
	default:
		echo Language::summon()->get($var);
		break;
}}
function _s($var,$caps="") {
switch($caps){
	case "ucfirst":
		echo ucfirst(strtolower(Settings::summon()->get($var)));
		break;
	case "ucwords":
		echo ucwords(strtolower(Settings::summon()->get($var)));
		break;
	case "strtolower":
		echo strtolower(Settings::summon()->get($var));
		break;
	case "strtoupper":
		echo strtoupper(Settings::summon()->get($var));
		break;
	case "":
	default:
		echo Settings::summon()->get($var);
		break;
}}
function _p($var,$caps="") {
switch($caps){
	case "ucfirst":
		echo ucfirst(strtolower(Page::summon()->get($var)));
		break;
	case "ucwords":
		echo ucwords(strtolower(Page::summon()->get($var)));
		break;
	case "strtolower":
		echo strtolower(Page::summon()->get($var));
		break;
	case "strtoupper":
		echo strtoupper(Page::summon()->get($var));
		break;
	case "":
	default:
		echo Page::summon()->get($var);
		break;
}}
function _u($var,$caps="") {
$userr = Database::summon()->getUser();
switch($caps){
	case "ucfirst":
		echo ucfirst(strtolower($userr[$var]));
		break;
	case "ucwords":
		echo ucwords(strtolower($userr[$var]));
		break;
	case "strtolower":
		echo strtolower($userr[$var]);
		break;
	case "strtoupper":
		echo strtoupper($userr[$var]);
		break;
	case "":
	default:
		echo $userr[$var];
		break;
}}

function get_gravatar($email, $size) {
	return "http://www.gravatar.com/avatar/".md5(strtolower(trim( $email )))."?s=".$size."&d=mm";
}
function get_gravatar_profile($email) {
	return "http://www.gravatar.com/".md5(strtolower(trim( $email ))).".json";
}
function send_mail($from,$to,$subject,$body) {
	$headers = '';
	$headers .= "From: $from\n";
	$headers .= "Reply-to: $from\n";
	$headers .= "Return-Path: $from\n";
	$headers .= "Message-ID: <" . md5(uniqid(time())) . "@" . $_SERVER['SERVER_NAME'] . ">\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Date: " . date('r', time()) . "\n";
	return mail($to,$subject,$body,$headers);
}
function alphaID($in, $to_num = false, $pad_up = 3, $passKey = 'my1PinkiePie31373')
{
  $index = "B9EDJO4UCN8XFAY30WG2PHLS5RTK1VMZ7Q6I";
  if ($passKey !== null) {    
    for ($n = 0; $n<strlen($index); $n++) {
      $i[] = substr ( $index,$n ,1);
    }
    $passhash = hash('sha256',$passKey);
    $passhash = (strlen ($passhash) < strlen ($index))
      ? hash('sha512',$passKey)
      : $passhash;
    for ($n=0; $n < strlen ($index); $n++) {
      $p[] =  substr ($passhash, $n ,1);
    }
    array_multisort ($p,  SORT_DESC, $i);
    $index = implode ($i);
  }
  $base  = strlen ($index);
  if ($to_num) {
    // Digital number  <<--  alphabet letter code
    $in  = strrev ($in);
    $out = 0;
    $len = strlen ($in) - 1;
    for ($t = 0; $t <= $len; $t++) {
      $bcpow = bcpow ($base, $len - $t);
      $out   = $out + strpos ($index, substr ($in, $t, 1)) * $bcpow;
    }
    if (is_numeric ($pad_up)) {
      $pad_up--;
      if ($pad_up > 0) {
        $out -= pow ($base, $pad_up);
      }
    }
    $out = sprintf ('%F', $out);
    $out = substr ($out, 0, strpos ($out, '.'));
  } else {
    // Digital number  -->>  alphabet letter code
    if (is_numeric ($pad_up)) {
      $pad_up--;
      if ($pad_up > 0) {
        $in += pow ($base, $pad_up);
      }
    }
    $out = "";
    for ($t = floor (log ($in, $base)); $t >= 0; $t--) {
      $bcp = bcpow ($base, $t);
      $a   = floor ($in / $bcp) % $base;
      $out = $out . substr ($index, $a, 1);
      $in  = $in - ($a * $bcp);
    }
    $out = strrev ($out); // reverse
  }
  return $out;
}
function fetch_canvas() {
	$canvas = Database::summon()->select_one()->from("canvases")->where('page = "'.p('module')."_".p('page').'"')->execute('fetchArray');
	if(strpos($canvas['credit'],";") > 0) {
		$d = explode(";",$canvas['credit']);
		$canvas['credit'] = $d[0];
		$canvas['courtesy'] = $d[1];
	}
	return $canvas;
}
function fetch_table_prefix() {
	$stufff = Database::summon()->getLogin();
	return $stufff['table_prefix'];
}
function fetch_profiles() {
	$prefix = fetch_table_prefix();
	return Database::summon()->select_perfect("p.*, m.owner")->from('profile_user_matches m LEFT JOIN '.$prefix.'profiles p ON m.profile = p.id')->where('m.user = '.u('id'))->execute("fetchArray");
}
function fetch_profile($proffid = 0, $showplan = false, $abroad = false) {
	$prefix = fetch_table_prefix();
	$proftypes = array('communities','professionals');
	if($abroad){
		$proff = Database::summon()->select_one()->from('profiles')->where('id = '.$proffid)->execute("fetchArray");
	}else{
		$proff = Database::summon()->select_one("p.*, m.owner")->from('profile_user_matches m LEFT JOIN '.$prefix.'profiles p ON m.profile = p.id')->where('m.user = '.u('id').' AND p.id = '.$proffid)->execute("fetchArray");
	}
	$proff['data'] = Database::summon()->select()->from($proftypes[$proff['type']])->where('id = '.$proff['link'])->execute('fetchArray');
	if($showplan) $proff['planinfo'] = fetch_profile_plan($proff['id']);
	return $proff;
}
function fetch_profile_plan($proffid = 0) {
	$prefix = fetch_table_prefix();
	return Database::summon()->select("c.*")->from('profiles p LEFT JOIN '.$prefix.'plans c ON p.plan = c.id')->where('p.id = '.$proffid)->execute("fetchArray");
}
function fetch_plan_features($planid = 0, $full = false) {
	$prefix = fetch_table_prefix();
	$queryy = Database::summon()->select_perfect("f.name,f.title")->from('plan_feature_matches p LEFT JOIN '.$prefix.'features f ON p.feature = f.id')->where('p.plan = '.$planid)->execute("fetchArray");
	if($full == true){
		return $queryy;
	}else{
		for($b=0;$b<count($queryy);$b++) {
			$planinf[$queryy[$b]['name']] = 1;
		}
		return $planinf;
	}
}
function howwide($int) {
	$names = array(0,"Single","Double","Triple");
	return  $names[$int];
}
//Last minute additions to the Settings singleton
Settings::summon()->set('pageid', $module);
Settings::summon()->set('langquery', $langquery);
Settings::summon()->set('lang', $language);

if(!defined('LITERAL')){
	if(defined('IS_ADMINCP') && !isUserLoggedIn() && $module != "account") {
		$module = 'welcome';
	}
	Page::summon($sector.".".$module);
	Page::summon()->set('module',$sector);
	Page::summon()->set('page',$module);
	Page::summon()->set('pragpage',$module);
	Page::summon()->set('advert',false);	
	Page::summon()->set('is_search',$is_search);
	Module::summon()->attachCommands(defined('IS_ADMINCP'));
	function output_headerinclude() {if(function_exists('headerinclude')){headerinclude();}}
	function output_content() {if(function_exists('content')){content();}}
	function is_welcome() {return s('pageid') == "welcome";}
	function is_live() {return ((s('shutdown') == 1) ? false : true);};
	function is_shutdown() {return ((s('shutdown') == 1) ? true : false);};
		
	//Module::summon()->initialize();
	Module::summon()->launchREST();
	Module::summon()->runHook('renderer_begin');

	/* So now we use Smarty! :D */
	require('./incl/classes/Smarty.class.php');
	Module::summon()->plantRenderer(new Smarty);
	if($_GET['theme'] != "") {
		$theme = strtolower($_GET['theme']);
	}elseif($module == "profile" ||$module == "city") {
		$theme = "metro";
	}elseif(!s('theme') || srtlen(s('theme')) < 2) {
		$theme = "default";
	}else{
		$theme = s('theme');
	}
	Module::renderer()->assign('theme',$theme, true);
	Module::renderer()->assign('user',Database::summon()->getUser(),true);
	if(defined('IS_ADMINCP')) {
		$theme .= "/admin";
		Module::renderer()->assign('admintitle', "MHS Admin", true);
		if(!isUserLoggedIn()) {
			Page::summon()->set('stylesheet','signin');
			Page::summon()->set('libraries',array('font-awesome'));
		}
	}else{
		$theme .= "/frontend";
	}

	Module::renderer()->setTemplateDir('./incl/xhtml/'.$theme);
	Module::renderer()->force_compile = true;
	Module::renderer()->debugging = false;
	Module::renderer()->caching = !(s('disablecache'));
	Module::renderer()->cache_lifetime = 900;
	Module::renderer()->assign('live', is_live());
	Module::renderer()->assign('is_search', $is_search);
	Module::renderer()->assign('shutdown', is_shutdown());
	Module::renderer()->assign('bodyclasses', "page_".$module);
	Module::summon()->runHook('renderer_display');
	Module::renderer()->assign('page', Page::summon()->retrieve(), true);
	Module::renderer()->assign('category', $_GET['categ']);
	Module::renderer()->assign('isUserLoggedIn', isUserLoggedIn());
	Module::renderer()->assign('yr', date("Y"));
	Module::summon()->runHook('ad_backdrop')->pushState('ad_backdrop');
	//if(function_exists('advertisement')){if(advertisement() === false){Module::renderer()->assign('advert', false);}else{Module::renderer()->assign('advert', true);Module::renderer()->assign('advertlink', advertisement());}}

	Module::summon()->runHook('renderer_end');

	if(defined('IS_ADMINCP') && !isUserLoggedIn()) {
		Module::summon()->setTemplate('master_login.tpl');
	}

	if(file_exists("./incl/xhtml/".$theme."/". (Module::summon()->getTemplate()) )) {
		Module::summon()->render();
	}else{
		if(defined('IS_ADMINCP')) {
			Module::summon()->render('master_full.tpl');
		}else{
			Module::summon()->render('master.tpl');
		}
	}
} /* END OF LITERAL CHECK */

?>
