<?php
/* Version Test cases generated on: 2010-12-03 07:12:50 : 1291391870*/
App::import('Model', 'Version');

class VersionTestCase extends CakeTestCase {
	var $fixtures = array('app.version', 'app.module', 'app.jobs_skill', 'app.users_skill');

	function startTest() {
		$this->Version =& ClassRegistry::init('Version');
	}

	function endTest() {
		unset($this->Version);
		ClassRegistry::flush();
	}

}
?>