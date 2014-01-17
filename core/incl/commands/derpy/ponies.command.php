<?php
defined('IGLOO') or die("Twilight Sparkle does not approve.");

class Command_Derpy_Ponies extends Listener {
	function action_derpy_ponies() {
		$ponies = Database::summon()->select_perfect()->from('ponies')->execute("fetchArray");
		$arrd = array();
		for($x=0;$x<count($ponies);$x++) {
		$arrd[] = array('id' => $ponies[$x]['id'], 'title' => $ponies[$x]['title']);
		}

		$finale = array('data' => $arrd);

		$response = isset($_GET['callback'])?$_GET['callback']."(".json_encode($finale).")":json_encode($finale);
		header("Content-type: application/json");
		Page::summon()->set('output',$response);
	}
}

?>