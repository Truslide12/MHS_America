<?php 
defined('IGLOO') or die("Twilight Sparkle does not approve."); 
/* MyBB Integration - MHS America Side */
$mybbcontent = "";
if($_GET['id']) {
	require "./mybb/".$_GET['id'].".php";
}else{
	require "./mybb/index.php";
}
 
function after_smarty() {
	global $template;
		$template = "frontend_mybb.tpl";
}
 
function content() {
	
}
 
function advertisement() {
	return "";
}
 
?>
