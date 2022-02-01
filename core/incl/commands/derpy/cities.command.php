<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Command_Derpy_Cities extends Listener {
	function action_derpy_cities() {
		//$states = Database::summon()->select()->from('states')->where("id = ".$_POST['q'])->execute("fetchArray");
		$cities = Database::summon()->select_perfect()->from('cities')->where("state = ".$_GET['state']." AND (county = ".$_GET['county']." OR countyb = ".$_GET['county']." OR countyc = ".$_GET['county']." OR countyd = ".$_GET['county']." OR countye = ".$_GET['county'].")")->execute("fetchArray");

		$arrd = array();
		for($x=0;$x<count($cities);$x++) {
		$arrd[] = array('id' => $cities[$x]['id'], 'title' => $cities[$x]['title']);
		}

		$finale = array('data' => $arrd);

		$response = isset($_GET['callback'])?$_GET['callback']."(".json_encode($finale).")":json_encode($finale);
		//$response = "{\"data\": [{\"id\":11,\"title\":\"".$_GET['state']."\"}]}";
		header("Content-type: application/json");
		Page::summon()->set('output',$response);
	}
}
?>