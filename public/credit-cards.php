<?php
$cc = $_GET['number'];
if(is_numeric($cc)){
	$count = strlen($cc);
	if($count % 2 == 1){$count--;}
	$ccr = strrev($cc);
	$i = 0;

	$doubled = array();
	for($x = 1;$x < $count+1;$x+=2) {
		$d = intval(substr($ccr,$x,1)) * 2;
		if(strlen(strval($d)) > 1) {
			$doubled = array_merge($doubled, str_split(strval($d)));
		}else{
			$doubled = array_merge($doubled, array($d));
		}
	}
	$i += array_sum($doubled);
	$singles = array();
	for($x = 0;$x < $count+1;$x+=2) {
		$i += intval(substr($ccr,$x,1));
	}
	echo((($i % 10 == 0) ? "valid" : "invalid"));
}else{
	echo("invalid");
}

?>