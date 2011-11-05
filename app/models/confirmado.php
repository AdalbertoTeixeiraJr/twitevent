<?php
class Confirmado extends AppModel {
	var $name = 'Confirmado';
	var $displayField = 'confirmacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
