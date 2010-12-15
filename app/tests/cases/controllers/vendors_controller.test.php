<?php
/* Vendors Test cases generated on: 2010-12-14 19:12:59 : 1292384519*/
App::import('Controller', 'Vendors');

class TestVendorsController extends VendorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VendorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vendor', 'app.module', 'app.version', 'app.profile', 'app.user', 'app.hospital', 'app.job', 'app.jobs_skill', 'app.profiles_skill');

	function startTest() {
		$this->Vendors =& new TestVendorsController();
		$this->Vendors->constructClasses();
	}

	function endTest() {
		unset($this->Vendors);
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