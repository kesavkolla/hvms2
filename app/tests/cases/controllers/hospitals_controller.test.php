<?php
/* Hospitals Test cases generated on: 2010-11-29 18:11:01 : 1291083481*/
App::import('Controller', 'Hospitals');

class TestHospitalsController extends HospitalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class HospitalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.hospital', 'app.profile', 'app.user', 'app.job');

	function startTest() {
		$this->Hospitals =& new TestHospitalsController();
		$this->Hospitals->constructClasses();
	}

	function endTest() {
		unset($this->Hospitals);
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