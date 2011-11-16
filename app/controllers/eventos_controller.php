<?php
class EventosController extends AppController {

	var $name = 'Eventos';
	var $helpers = array('Html');
	var $components = array('Twitter.Twitter');

	function index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		$evento = $this->Evento->read(null, $id);
		$this->set('evento', $evento);
	}

	function add() {
		$usuario = $this->Session->read("Usuario");
		$usuario = $this->Evento->Usuario->read(null, $usuario['id']);

		$this->set('usuario', $usuario);
		if (!empty($this->data)) {
			$this->Evento->create();
			if ($this->Evento->save($this->data)) {
				$data = $this->data;
				//$date = strtotime("11/03/2011 11:00AM");
				$date = strtotime($data['Evento']['data']['month'] . "/" . $data['Evento']['data']['day'] . "/" . $data['Evento']['data']['year'] . " " . $data['Evento']['data']['hour'] . ":" . $data['Evento']['data']['min'] . "" . $data['Evento']['data']['meridian']);
				$mensagem = "#TwitEvent_ " . $data['Evento']['titulo'] . '. Dia:' . date('j', $date) . '/' . date('M', $date) . '/' . date('Y', $date) . ' às ' . date('g', $date) . ':' . date('i', $date) . ':' . date('A', $date) . ' em ' . $data['Evento']['local'] . '. Ingressos por R$' . $data['Evento']['preco'] . '. Acessem: ' . Router::url('/usuarios/view/' . $data['Evento']['usuario_id'], true);
				$this->Session->setFlash(__('The evento has been saved', true));
				$this->Twitter->updateStatus($mensagem);
				$this->redirect(array('controller' => 'Usuarios', 'action' => 'view', $usuario['Usuario']['id']));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Evento->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$usuario = $this->Session->read("Usuario");
		$evento = $this->Evento->read(null, $id);
		if ($evento['Evento']['usuario_id'] != $usuario['id']) {
			$this->Session->setFlash(__('Esse evento não é seu!', true));
			$this->redirect(array('action' => 'index'));
			exit;
		}
		
		if (!empty($this->data)) {
			if ($this->Evento->save($this->data)) {
				$this->Session->setFlash(__('The evento has been saved', true));
				$mensagem = $this->get_mensagem_para_divulgacao($this->data['Evento']['id']);
				$this->Twitter->updateStatus($mensagem);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evento->read(null, $id);
		}
		$usuarios = $this->Evento->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evento', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$usuario = $this->Session->read("Usuario");
		$evento = $this->Evento->read(null, $id);
		if ($evento['Evento']['usuario_id'] != $usuario['id']) {
			$this->Session->setFlash(__('Esse evento não é seu!', true));
			$this->redirect(array('action' => 'index'));
			exit;
		}
		
		if ($this->Evento->delete($id)) {
			$this->Session->setFlash(__('Evento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('evento', $this->Evento->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Evento->create();
			if ($this->Evento->save($this->data)) {
				$this->Session->setFlash(__('The evento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.', true));
			}
		}
		$usuarios = $this->Evento->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Evento->save($this->data)) {
				$this->Session->setFlash(__('The evento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Evento->read(null, $id);
		}
		$usuarios = $this->Evento->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for evento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Evento->delete($id)) {
			$this->Session->setFlash(__('Evento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Evento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	public function get_mensagem_para_divulgacao($id = null) {
		if (!$id) {
			return "";
		}
		$evento = $this->Evento->read(null, $id);
		$date = strtotime($evento['Evento']['data']);
		$mensagem = $evento['Evento']['titulo'] . '. Dia:' . date('j', $date) . '/' . date('M', $date) . '/' . date('Y', $date) . ' às ' . date('g', $date) . ':' . date('i', $date) . ':' . date('A', $date) . ' em ' . $evento['Evento']['local'] . '. Ingressos por R$' . $evento['Evento']['preco'] . '. Acessem: ' . Router::url('/usuarios/view/' . $evento['Evento']['usuario_id'], true);
		return $mensagem;
	}
}
