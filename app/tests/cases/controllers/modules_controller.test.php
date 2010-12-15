<?php
/* Modules Test cases generated on: 2010-12-14 19:12:40 : 1292384560*/
App::import('Controller', 'Modules');

class TestModulesController extends ModulesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ModulesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.module', 'app.vendor', 'app.version', 'app.profile', 'app.user', 'app.hospital', 'app.job', 'app.jobs_skill', 'app.profiles_skill');

	function startTest() {
		$this->Modules =& new TestModulesController();
		$this->Modules->constructClasses();
	}

	function endTest() {
		unset($this->Modules);
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