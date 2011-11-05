<?php
class PresencasController extends AppController {

	var $name = 'Presencas';

	function index() {
		$this->Presenca->recursive = 0;
		$this->set('presencas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid presenca', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('presenca', $this->Presenca->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Presenca->create();
			debug($this->data);
			$data = array('Presenca' => array('id' => '266113704', 'evento_id' => $this->data['Presenca']['evento_id'], 'confirmacao' => $this->data['Presenca']['confirmacao']));
			if ($this->Presenca->save($data)) {
				$this->Session->setFlash(__('The presenca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presenca could not be saved. Please, try again.', true));
			}
		}
		$eventos = $this->Presenca->Evento->find('list');
		$this->set(compact('eventos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid presenca', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Presenca->save($this->data)) {
				$this->Session->setFlash(__('The presenca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presenca could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Presenca->read(null, $id);
		}
		$eventos = $this->Presenca->Evento->find('list');
		$this->set(compact('eventos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for presenca', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Presenca->delete($id)) {
			$this->Session->setFlash(__('Presenca deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Presenca was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Presenca->recursive = 0;
		$this->set('presencas', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid presenca', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('presenca', $this->Presenca->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Presenca->create();
			if ($this->Presenca->save($this->data)) {
				$this->Session->setFlash(__('The presenca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presenca could not be saved. Please, try again.', true));
			}
		}
		$eventos = $this->Presenca->Evento->find('list');
		$this->set(compact('eventos'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid presenca', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Presenca->save($this->data)) {
				$this->Session->setFlash(__('The presenca has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The presenca could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Presenca->read(null, $id);
		}
		$eventos = $this->Presenca->Evento->find('list');
		$this->set(compact('eventos'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for presenca', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Presenca->delete($id)) {
			$this->Session->setFlash(__('Presenca deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Presenca was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
