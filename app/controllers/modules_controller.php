<?php
class ModulesController extends AppController {

	public $name = 'Modules';
	function admin_index() {
		$this->Module->recursive = 0;
		$this->set('modules', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid module', true));
			$this->redirect(array('action' => 'index'));
			
		}
		$this->set('module', $this->Module->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Module->create();
			if ($this->Module->save($this->data)) {
				$this->Session->setFlash(__('The module has been saved', true));
				$this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.', true));
			}
		}
		$vendors = $this->Module->Vendor->find('list');
		$this->set(compact('vendors'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid module', true));
			$this->redirect(array('action' => 'index'));
			
		}
		if (!empty($this->data)) {
			if ($this->Module->save($this->data)) {
				$this->Session->setFlash(__('The module has been saved', true));
				$this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Module->read(null, $id);
		}
		$vendors = $this->Module->Vendor->find('list');
		$this->set(compact('vendors'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for module', true));
			$this->redirect(array('action'=>'index'));
			
		}
		if ($this->Module->delete($id)) {
			$this->Session->setFlash(__('Module deleted', true));
			$this->redirect(array('action'=>'index'));
			
		}
		$this->Session->setFlash(__('Module was not deleted', true));
		$this->redirect(array('action' => 'index'));
		
	}
}
?>