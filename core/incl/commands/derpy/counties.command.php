<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Command_Derpy_Counties extends Listener {
	function action_derpy_counties() {
		//$states = Database::summon()->select()->from('states')->where("id = ".$_POST['q'])->execute("fetchArray");
		$counties = Database::summon()->select_perfect()->from('counties')->where("state = ".$_GET['state'])->execute("fetchArray");

		$arrd = array();
		for($x=0;$x<count($counties);$x++) {
		$arrd[] = array('id' => $counties[$x]['id'], 'title' => $counties[$x]['title']);
		}

		$finale = array('data' => $arrd);

		$response = isset($_GET['callback'])?$_GET['callback']."(".json_encode($finale).")":json_encode($finale);
		//$response = "{\"data\": [{\"id\":11,\"title\":\"".$_GET['state']."\"}]}";
		header("Content-type: application/json");
		Page::summon()->set('output',$response);
	}
}
?>