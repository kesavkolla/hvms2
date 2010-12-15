<?php
class VersionsController extends AppController {

	var $name = 'Versions';

	function admin_index() {
		$this->Version->recursive = 0;
		$this->set('versions', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid version', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('version', $this->Version->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Version->create();
			if ($this->Version->save($this->data)) {
				$this->Session->setFlash(__('The version has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version could not be saved. Please, try again.', true));
			}
		}

		$modules = $this->Version->Module->find('list',
												array(
													  'fields' =>  array('Module.id',
																		 'Module.modulename',
																		 'Vendor.vendorname'),
													  'contain' => array('Vendor'),
													  'recursive' => 1
													  ));
		$this->set(compact('modules'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid version', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Version->save($this->data)) {
				$this->Session->setFlash(__('The version has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The version could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Version->read(null, $id);
		}
		$modules = $this->Version->Module->find('list',
												array(
													  'fields' =>  array('Module.id',
																		 'Module.modulename',
																		 'Vendor.vendorname'),
													  'contain' => array('Vendor'),
													  'recursive' => 1
													  ));
		$this->set(compact('modules'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for version', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Version->delete($id)) {
			$this->Session->setFlash(__('Version deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Version was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>