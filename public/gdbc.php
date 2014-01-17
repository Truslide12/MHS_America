<?php

if($_POST['counties']){
	$countis = explode(",",str_replace("\n",",",str_replace("\r\n","\n",$_POST['counties'])));
	$countylist = "INSERT INTO `mhs_cities`(`name`, `title`, `county`, `countyb`, `state`) VALUES";
	$comma = "";
	for($x=0;$x<count($countis);$x++) {
		if($countis[$x] != ""){
			$countylist .= $comma." (\"".strtolower(str_replace(".","",str_replace("'","",str_replace("-","",str_replace(" ","",stripslashes($countis[$x]))))))."\", \"".$countis[$x]."\", ".$_POST['countyid'].", 0, 1)";
			$comma = ",";
		}
	}
	$countylist .= ";";
}

?><!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>
<form method="post">
County ID: <input type="text" name="countyid" value="<?php echo($_POST['countyid']); ?>"><br/>
<textarea name="counties"><?php echo($_POST['counties']); ?></textarea>
<input type="submit" value="Go">
</form>
<div>
<textarea rows="30" cols="48">
<?php echo($countylist); ?>
</textarea>
</div>
</body>
</html>
