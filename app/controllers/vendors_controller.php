<?php
class VendorsController extends AppController {

	public $name = 'Vendors';

	function admin_index() {
		$this->Vendor->recursive = 0;
		$this->set('vendors', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vendor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vendor', $this->Vendor->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->data)) {
				$this->Session->setFlash(__('The vendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid vendor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vendor->save($this->data)) {
				$this->Session->setFlash(__('The vendor has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vendor->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for vendor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vendor->delete($id)) {
			$this->Session->setFlash(__('Vendor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vendor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>