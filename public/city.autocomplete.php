<?php

define('IGLOO',1);
define('LITERAL',1);
chdir('../core');
include "./settei-core.php";
$list = array();
if($_GET['q'] != "") {
	$list = Database::summon()->select_perfect()->from('cities')->where("`title` LIKE '".addslashes($_GET['q'])."%'")->limit(5)->execute('fetchArray');
}

echo json_encode($list);


?>
