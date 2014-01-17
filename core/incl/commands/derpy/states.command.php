<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Command_Derpy_States extends Listener {
	function action_derpy_states() {
		$states = Database::summon()->select_perfect()->from('states')->execute("fetchArray");
		$arrd = array();
		for($x=0;$x<count($states);$x++) {
		$arrd[] = array('id' => $states[$x]['id'], 'title' => $states[$x]['title']);
		}

		$finale = array('data' => $arrd);

		$response = isset($_GET['callback'])?$_GET['callback']."(".json_encode($finale).")":json_encode($finale);
		header("Content-type: application/json");
		Page::summon()->set('output',$response);
	}
}

?>