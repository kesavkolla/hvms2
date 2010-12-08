<?php
class VendorsController extends AppController {

	var $name = 'Vendors';

	function index() {
		$this->Vendor->recursive = 1;
		$this->set('vendors', $this->paginate());
		$this->set('skills', $this->Vendor->getChainedSkills());

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vendor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vendor', $this->Vendor->read(null, $id));
	}
}
?>