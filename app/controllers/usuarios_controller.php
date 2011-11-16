<?php

class UsuariosController extends AppController {
	
	var $name = 'Usuarios';
	var $helpers = array('Javascript');
	var $components = array('Twitter.Twitter');

	function index() {
		$usuario = $this->Session->read("Usuario");
		if ($usuario) {
				$this->redirect(array('action' => 'view', $usuario['id']));
				exit;
		} else {
			$this->redirect(array('controller'=>'pages', 'action' => 'home'));
			exit;
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$usuario = $this->Usuario->read(null, $id);
		
		$this->set('usuario', $usuario);
		$this->get_eventos_confirmados($id);
		$this->get_eventos_dos_amigos($id);
	}
	
	private function get_eventos_confirmados($id = null) {
		$usuario = $this->Usuario->read(null, $id);
		
		$eventosConfirmados = array();
		foreach ($usuario['Presenca'] as $ev) {
			if ($ev['usuario_id'] == $usuario['Usuario']['id']) {
				$evento = $this->Usuario->Evento->findById($ev['evento_id']);
				if (empty($evento)) {
					$this->delete_confirmacao($ev['evento_id']);
				} else {
					$eventosConfirmados[] = array('Evento' => $evento, 'confirmacao' => $ev['confirmacao']);
				}
			}
		}
		
		$this->set('eventosConfirmados', $eventosConfirmados);
	}
	
	private function get_eventos_dos_amigos($id = null) {
		$usuario = $this->Usuario->read(null, $id);
		
		$eventos = array();
		foreach ($usuario['Seguindo'] as $seguindo) {
			$quem_me_segue = $this->Usuario->read(null, $seguindo['id']);
			if (!empty($quem_me_segue)) {
				$eventos[$quem_me_segue['Usuario']['id']] = $quem_me_segue['Evento'];
			}
		}
		
		$this->set('eventos', $eventos);
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$usuario = $this->Session->read("Usuario");
		if ($usuario['id'] != $id) {
			$this->Session->setFlash(__('Você não possui permissão para deletar esse usuário!', true));
			$this->redirect(array('action'=>'index'));
			exit;
		}
		
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->Session->write("Usuario", null);
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function admin_index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usuario', $this->Usuario->read(null, $id));
	}
	
	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usuario->delete($id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usuario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function login() {
		if($this->Session->check("Usuario")) {
			$this->Session->setFlash(__('Você já está logado!', true));
			$this->redirect(array('action' => 'index'));
			exit;
		}
		$this->Twitter->setupApp('2xhyROXfUG9M3oRkXYfLQ', 'N7357bT7k2yYxY75Lk5dSR4EBdTf5N2dHF2oCjCvgU');
		$this->Twitter->connectApp('http://localhost/twitevent/usuarios/authorization');
	}
	
	function authorization() {
		if($this->Session->check("Usuario")) {
			$this->Session->setFlash(__('Você já está logado!', true));
			$this->redirect(array('action' => 'index'));
			exit;
		}
		$this->Twitter->authorizeTwitterUser($this->params['url']['oauth_token'], $this->params['url']['oauth_verifier']);
		$twitter_user = $this->Twitter->accountVerifyCredentials();
		$ids = $this->Twitter->getFriendsIds($twitter_user['screen_name']);
		
		foreach ($ids['ids'] as $quem_me_segue) {
			$this->Usuario->Seguindo->save(array('Seguindo' => array('id' => $quem_me_segue, 'usuario_id' => $twitter_user['id'])));
		}
		
		$data = array('Usuario' => array('id' => $twitter_user['id'], 'screen_name' => $twitter_user['screen_name'], 'name' => $twitter_user['name'], 'profile_image_url' => $twitter_user['profile_image_url'], 'description' => $twitter_user['description']));
		
		if ($this->Usuario->save($data)) {
			$this->Session->setFlash(__('The usuario has been saved', true));
		} else {
			$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
		}
		
		$usuario = $this->Usuario->findById($twitter_user['id']);
		
		if (!empty($usuario)) {
			$this->Session->write("Usuario", $usuario["Usuario"]);
			$this->redirect(array('controller' => 'Usuarios', 'action' => 'view', $usuario['Usuario']['id']));
		}
	}
	
	function logout() {
		$this->Twitter->logoutTwitterUser();
		$usuario = $this->Session->read("Usuario");
		if ($usuario) {
				$this->Session->write("Usuario", null);
				$this->redirect(array('controller'=>'pages', 'action' => 'home'));
				$this->Session->setFlash(__($usuario['Usuario']['twitter_user'] . " deslogado.", true));
				exit;
		}
	}
	
	function calendar($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$usuario = $this->Usuario->read(null, $id);
		$this->set('usuario', $usuario);
		
		$eventos = array();
		foreach ($usuario['Seguindo'] as $seguindo) {
			$quem_me_segue = $this->Usuario->read(null, $seguindo['id']);
			if (!empty($quem_me_segue)) {
				$eventos[$quem_me_segue['Usuario']['id']] = $quem_me_segue['Evento'];
			}
		}
		$this->set('eventos', $eventos);
	}
	
	function add_confirmacao($id = null, $confirmacao = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$usuario = $this->Session->read("Usuario");
		
		$usuario = $this->Usuario->read(null, $usuario['id']);
		$modificou_presenca = false;
		for ($i = 0; $i < sizeof($usuario['Presenca']); $i++) {
			if ($usuario['Presenca'][$i]['usuario_id'] == $usuario['Usuario']['id'] && $usuario['Presenca'][$i]['evento_id'] == $id) {
				$usuario['Presenca'][$i]['confirmacao'] = $confirmacao;
				$modificou_presenca = true;
			}
		}
		
		if (!$modificou_presenca) {
			$usuario['Presenca'][] = array('usuario_id' => $usuario['Usuario']['id'], 'evento_id' => $id, 'confirmacao' => $confirmacao);
		}
		
		if ($this->Usuario->Presenca->saveAll($usuario['Presenca'])) {
			$this->Session->setFlash(__('Confirmação Salva!', true));
		} else {
			$this->Session->setFlash(__('Confirmação Não Pôde Ser Salva!', true));
		}
		
		//debug($this->Usuario->Evento->get_mensagem_para_divulgacao($id));
		//$this->Twitter->updateStatus("EU VOU!");
		$this->redirect(array('action' => 'view', $usuario['Usuario']['id']));
	}
	
	function delete_confirmacao($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid evento', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$usuario = $this->Session->read("Usuario");
		
		$usuario = $this->Usuario->read(null, $usuario['id']);
		$presenca_id = -1;
		for ($i = 0; $i < sizeof($usuario['Presenca']); $i++) {
			if ($usuario['Presenca'][$i]['usuario_id'] == $usuario['Usuario']['id'] && $usuario['Presenca'][$i]['evento_id'] == $id) {
				$presenca_id = $usuario['Presenca'][$i]['id'];
			}
		}
		
		if ($this->Usuario->Presenca->delete($presenca_id)) {
			$this->Session->setFlash(__('Usuario deleted', true));
		}
		
		$this->redirect(array('action' => 'view', $usuario['Usuario']['id']));
	}
}