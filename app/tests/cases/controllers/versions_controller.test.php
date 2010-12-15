<?php
/* Versions Test cases generated on: 2010-12-14 19:12:22 : 1292384722*/
App::import('Controller', 'Versions');

class TestVersionsController extends VersionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VersionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.version', 'app.module', 'app.vendor', 'app.profile', 'app.user', 'app.hospital', 'app.job', 'app.jobs_skill', 'app.profiles_skill');

	function startTest() {
		$this->Versions =& new TestVersionsController();
		$this->Versions->constructClasses();
	}

	function endTest() {
		unset($this->Versions);
		ClassRegistry::flush();
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