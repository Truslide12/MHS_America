<?php
$headers = '';
	$headers .= "From: no-reply@mhsamerica.com\n";
	$headers .= "Reply-to: no-reply@mhsamerica.com\n";
	$headers .= "Return-Path: no-reply@mhsamerica.com\n";
	$headers .= "Message-ID: <" . md5(uniqid(time())) . "@" . $_SERVER['SERVER_NAME'] . ">\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Date: " . date('r', time()) . "\n";
if(mail("kagemykel.edwards@gmail.com","Hello","hello world",$headers)){echo("DONE!");}

?>