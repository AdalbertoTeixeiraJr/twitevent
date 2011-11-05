<?php
class SeguindosController extends AppController {

	var $name = 'Seguindos';

	function index() {
		$this->Seguindo->recursive = 0;
		$this->set('seguindos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seguindo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seguindo', $this->Seguindo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Seguindo->create();
			if ($this->Seguindo->save($this->data)) {
				debug($this->data);
				$this->Session->setFlash(__('The seguindo has been saved', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seguindo could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Seguindo->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seguindo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Seguindo->save($this->data)) {
				$this->Session->setFlash(__('The seguindo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seguindo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Seguindo->read(null, $id);
		}
		$usuarios = $this->Seguindo->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seguindo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Seguindo->delete($id)) {
			$this->Session->setFlash(__('Seguindo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seguindo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Seguindo->recursive = 0;
		$this->set('seguindos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid seguindo', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('seguindo', $this->Seguindo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Seguindo->create();
			if ($this->Seguindo->save($this->data)) {
				$this->Session->setFlash(__('The seguindo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seguindo could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Seguindo->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid seguindo', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Seguindo->save($this->data)) {
				$this->Session->setFlash(__('The seguindo has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seguindo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Seguindo->read(null, $id);
		}
		$usuarios = $this->Seguindo->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for seguindo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Seguindo->delete($id)) {
			$this->Session->setFlash(__('Seguindo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Seguindo was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
