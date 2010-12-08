<?php
/* Versions Test cases generated on: 2010-12-03 08:12:29 : 1291392149*/
App::import('Controller', 'Versions');

class TestVersionsController extends VersionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VersionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.version', 'app.module', 'app.user', 'app.profile', 'app.job', 'app.jobs_skill', 'app.users_skill');

	function startTest() {
		$this->Versions =& new TestVersionsController();
		$this->Versions->constructClasses();
	}

	function endTest() {
		unset($this->Versions);
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

}
?>