<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");
/*
UserCake Version: 2.0.2
http://usercake.com
*/

$dbdataa = Database::summon()->getLogin();
//Database Information
$db_host = $dbdataa['host']; //Host address (most likely localhost)
$db_name = $dbdataa['database']; //Name of Database
$db_user = $dbdataa['user']; //Name of database user
$db_pass = $dbdataa['pass']; //Password for database user
$db_table_prefix = "mhs_";

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

/* Create a new mysqli object with database connection parameters */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli; 

if(mysqli_connect_errno()) {
	echo "Connection Failed: " . mysqli_connect_errno();
	exit();
}

?>
