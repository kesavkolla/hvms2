<?php
class ModulesController extends AppController {

	public $name = 'Modules';

	function index() {
		$this->Module->recursive = 1;
		$this->set('modules', $this->Module->find('all'));
		//$this->set('modules', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid module', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('module', $this->Module->read(null, $id));
	}
}
?>