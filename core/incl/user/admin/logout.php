<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("./incl/user/models/config.php");
//if (!securePage($_SERVER['PHP_SELF'])){die();}

//Log the user out
if(isUserLoggedIn())
{
	$loggedInUser->userLogOut();
}

header("Location: http://".$_SERVER['HTTP_HOST']);
die();

?>

