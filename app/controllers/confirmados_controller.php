<?php
class ConfirmadosController extends AppController {

	var $name = 'Confirmados';

	function index() {
		$this->Confirmado->recursive = 0;
		$this->set('confirmados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid confirmado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('confirmado', $this->Confirmado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Confirmado->create();
			if ($this->Confirmado->save($this->data)) {
				$this->Session->setFlash(__('The confirmado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The confirmado could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Confirmado->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid confirmado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Confirmado->save($this->data)) {
				$this->Session->setFlash(__('The confirmado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The confirmado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Confirmado->read(null, $id);
		}
		$usuarios = $this->Confirmado->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for confirmado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Confirmado->delete($id)) {
			$this->Session->setFlash(__('Confirmado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Confirmado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Confirmado->recursive = 0;
		$this->set('confirmados', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid confirmado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('confirmado', $this->Confirmado->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Confirmado->create();
			if ($this->Confirmado->save($this->data)) {
				$this->Session->setFlash(__('The confirmado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The confirmado could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Confirmado->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid confirmado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Confirmado->save($this->data)) {
				$this->Session->setFlash(__('The confirmado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The confirmado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Confirmado->read(null, $id);
		}
		$usuarios = $this->Confirmado->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for confirmado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Confirmado->delete($id)) {
			$this->Session->setFlash(__('Confirmado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Confirmado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
