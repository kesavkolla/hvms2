<?php
/* Hospital Test cases generated on: 2010-11-29 18:11:40 : 1291083460*/
App::import('Model', 'Hospital');

class HospitalTestCase extends CakeTestCase {
	var $fixtures = array('app.hospital', 'app.profile', 'app.user', 'app.job');

	function startTest() {
		$this->Hospital =& ClassRegistry::init('Hospital');
	}

	function endTest() {
		unset($this->Hospital);
		ClassRegistry::flush();
	}

}
?>