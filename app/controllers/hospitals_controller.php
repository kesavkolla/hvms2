<?php
class HospitalsController extends AppController {

	var $name = 'Hospitals';
	
	function hospNames() {
		$this->autoRender = false;
		if (isset($this->params['url']) && isset($this->params['url']['term'])) {
            $hosp = $this->Hospital->find('list', array('conditions' => 'Hospital.name like "' . $this->params['url']['term'] . '%"',
														'fields' => 'name'));
			echo json_encode( array_values($hosp));		
        }		
	}
	
	function index() {
		$this->Hospital->recursive = 0;
		$this->set('hospitals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid hospital', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('hospital', $this->Hospital->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Hospital->create();
			if ($this->Hospital->save($this->data)) {
				$this->Session->setFlash(__('The hospital has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospital could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid hospital', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Hospital->save($this->data)) {
				$this->Session->setFlash(__('The hospital has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospital could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hospital->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for hospital', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hospital->delete($id)) {
			$this->Session->setFlash(__('Hospital deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hospital was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Hospital->recursive = 0;
		$this->set('hospitals', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid hospital', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('hospital', $this->Hospital->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Hospital->create();
			if ($this->Hospital->save($this->data)) {
				$this->Session->setFlash(__('The hospital has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospital could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid hospital', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Hospital->save($this->data)) {
				$this->Session->setFlash(__('The hospital has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hospital could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Hospital->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for hospital', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Hospital->delete($id)) {
			$this->Session->setFlash(__('Hospital deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Hospital was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>