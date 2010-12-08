<?php
/* Jobs Test cases generated on: 2010-11-29 18:11:39 : 1291082799*/
App::import('Controller', 'Jobs');

class TestJobsController extends JobsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class JobsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.job', 'app.user', 'app.profile');

	function startTest() {
		$this->Jobs =& new TestJobsController();
		$this->Jobs->constructClasses();
	}

	function endTest() {
		unset($this->Jobs);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>