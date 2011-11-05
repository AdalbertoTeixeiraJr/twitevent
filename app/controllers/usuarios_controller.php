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
		}
		//$this->redirect("/".);
		//$this->Usuario->recursive = 0;
		//$this->set('usuarios', $this->paginate());
	}

	function view($id = null) {
		//debug($this->Twitter->updateStatus('Outro teste'));
		//debug($this->Twitter->getFriendsIds('LESprojetoEJC'));
		//debug(Inflector::pluralize('seguindo'));
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		$usuario = $this->Usuario->read(null, $id);
		debug($usuario);
		$this->set('usuario', $usuario);
		
		$eventosConfirmados = array();
		foreach ($usuario['Presenca'] as $ev) {
			if ($ev['usuario_id'] == $usuario['Usuario']['id']) {
				$eventosConfirmados[] = array('Evento' => $this->Usuario->Evento->findById($ev['evento_id']), 'confirmacao' => $ev['confirmacao']);
			}
			//$quem_me_segue = $this->Usuario->read(null, $seguindo['id']);
			//if (!empty($quem_me_segue)) {
				//$meusEventos[$quem_me_segue['Usuario']['id']] = $quem_me_segue['Evento'];
			//}
		}
		
		$this->set('eventosConfirmados', $eventosConfirmados);
		//debug($eventosConfirmados);
		
		//debug($usuario);
		$eventos = array();
		foreach ($usuario['Seguindo'] as $seguindo) {
			//debug($this->Twitter->showUser($seguindo['id']));
			$quem_me_segue = $this->Usuario->read(null, $seguindo['id']);
			if (!empty($quem_me_segue)) {
				$eventos[$quem_me_segue['Usuario']['id']] = $quem_me_segue['Evento'];
			}
		}
		
		$this->set('eventos', $eventos);
		//debug($usuario);
	}

	function add() {
		$usuario = $this->Session->read("Usuario");
		if ($usuario) {
				$this->redirect(array('action' => 'view', $usuario['id']));
				exit;
		}
		
		if (!empty($this->data)) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$usuario = $this->Usuario->read(null, $id);
			$oldPassword = $this->data["Usuario"]["senha_antiga"];
			$newPassword = $this->data["Usuario"]["senha_nova"];
			$reNewPassword = $this->data["Usuario"]["senha_nova_re"];
			if (!empty($oldPassword) or !empty($newPassword) or !empty($reNewPassword)) {
				if (($oldPassword != $usuario['Usuario']['senha']) or ($newPassword != $reNewPassword)) {
					$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', false));
				} else {
					if ($this->Usuario->save($this->data)) {
						$this->Session->setFlash(__('The usuario has been saved', true));
						$this->Session->write("Usuario", $this->data["Usuario"]);
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
					}
				}
			}
			/*if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				//print_r($this->data["Usuario"]);
				$this->Session->write("Usuario", $this->data["Usuario"]);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}*/
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usuario', true));
			$this->redirect(array('action'=>'index'));
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

	function admin_add() {
		if (!empty($this->data)) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usuario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usuario->save($this->data)) {
				$this->Session->setFlash(__('The usuario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usuario->read(null, $id);
		}
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
		$this->Twitter->setupApp('2xhyROXfUG9M3oRkXYfLQ', 'N7357bT7k2yYxY75Lk5dSR4EBdTf5N2dHF2oCjCvgU');
		$this->Twitter->connectApp('http://localhost/twitevent/usuarios/authorization');
	}
	
	function authorization() {
		$this->Twitter->authorizeTwitterUser($this->params['url']['oauth_token'], $this->params['url']['oauth_verifier']);
		debug($twitter_user = $this->Twitter->accountVerifyCredentials());
		//debug($this->Twitter->getTwitterUser(true));
		//debug($twitter_user['screen_name']);
		//debug($twitter_user['id']);
		
		//debug($this->Twitter->getFriendsIds($twitter_user['screen_name']));
		$ids = $this->Twitter->getFriendsIds($twitter_user['screen_name']);
		foreach ($ids['ids'] as $quem_me_segue) {
			//debug($quem_me_segue);
			//debug($this->Twitter->showUser($quem_me_segue));
			$this->Usuario->Seguindo->save(array('Seguindo' => array('id' => $quem_me_segue, 'usuario_id' => $twitter_user['id'])));
		}
		
		$data = array('Usuario' => array('id' => $twitter_user['id'], 'screen_name' => $twitter_user['screen_name'], 'name' => $twitter_user['name'], 'profile_image_url' => $twitter_user['profile_image_url'], 'description' => $twitter_user['description']));
		
		if ($this->Usuario->save($data)) {
			$this->Session->setFlash(__('The usuario has been saved', true));
		} else {
			$this->Session->setFlash(__('The usuario could not be saved. Please, try again.', true));
		}
		
		
		$usuario = $this->Usuario->findById($twitter_user['id']);
		debug($usuario);
		//$this->Twitter->logoutTwitterUser();
		if (!empty($usuario)) {
			$this->Session->write("Usuario", $usuario["Usuario"]);
			debug("AQUI");
			$this->redirect(array('action' => 'view', $usuario['Usuario']['id']));
		}
		//debug($this->Twitter->newDirectMessage('afaranha', 'O que vamos fazer essa noite Cérebro?'));
		
	}
	
	function callback() {
		debug($this->Twitter->accountVerifyCredentials());
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
		//debug($usuario);
		
		$eventos = array();
		foreach ($usuario['Seguindo'] as $seguindo) {
			//debug($this->Twitter->showUser($seguindo['id']));
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
		$data = array('Presenca' => array('usuario_id' => $usuario['id'], 'evento_id' => $id, 'confirmacao' => $confirmacao));
		if ($this->Usuario->Presenca->save($data)) {
			$this->Session->setFlash(__('Confirmação Salva!', true));
		} else {
			$this->Session->setFlash(__('Confirmação Não Pôde Salva!', true));
		}
		
		$this->redirect(array('action' => 'view', $usuario['id']));
	}
	
	function OLDlogin() {
		//print_r($this->data);
		if (!empty($this->data)) {
			$conditions = array("Usuario.twitter_user"=>$this->data["Usuario"]["twitter_user"]);
			$fields = array("Usuario.twitter_user", "Usuario.senha");
			$someone = $this->Usuario->find($conditions, $fields);
			if (!empty($this->data["Usuario"]["senha"]) &&  $someone["Usuario"]["senha"] == $this->data["Usuario"]["senha"]) {
				// logado
				$this->set('situacao', "Logado");
				$this->Session->write("Usuario", $someone["Usuario"]);
				$this->redirect(array('action' => 'view', $someone['Usuario']['id']));
				$this->Session->setFlash(__($someone['Usuario']['twitter_user'] . " logado.", true));
				//$this->redirect("/".$this->Session->read("url_r"));
				exit;
			} else {
			}
		}
	}
}