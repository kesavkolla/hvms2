<?php
/* ProfileRole Test cases generated on: 2011-01-07 11:01:33 : 1294429293*/
App::import('Model', 'ProfileRole');

class ProfileRoleTestCase extends CakeTestCase {
	var $fixtures = array('app.profile_role', 'app.profile', 'app.user', 'app.hospital', 'app.job', 'app.module', 'app.vendor', 'app.version', 'app.profiles_skill', 'app.jobs_skill', 'app.interest');

	function startTest() {
		$this->ProfileRole =& ClassRegistry::init('ProfileRole');
	}

	function endTest() {
		unset($this->ProfileRole);
		ClassRegistry::flush();
	}

}
?>