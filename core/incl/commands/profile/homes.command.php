<?php

class Command_Profile_Homes extends Listener {
	function action_profile_homes() {
		Module::setVar('homesview',true);
	}
}

?>
