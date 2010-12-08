<?php
class VersionsController extends AppController {

	var $name = 'Versions';

	function index() {
		$this->Version->recursive = 1;
		$this->set('versions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid version', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('version', $this->Version->read(null, $id));
	}
}
?>