<?php
/* Interest Test cases generated on: 2010-12-21 08:12:52 : 1292950732*/
App::import('Model', 'Interest');

class InterestTestCase extends CakeTestCase {
	var $fixtures = array('app.interest', 'app.user', 'app.hospital', 'app.profile', 'app.version', 'app.module', 'app.vendor', 'app.profiles_skill', 'app.job', 'app.jobs_skill');

	function startTest() {
		$this->Interest =& ClassRegistry::init('Interest');
	}

	function endTest() {
		unset($this->Interest);
		ClassRegistry::flush();
	}

}
?>