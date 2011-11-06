<?php
class Confirmacao extends AppModel {
	var $name = 'Confirmacao';
	var $displayField = 'confirmacao';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Presenca' => array(
			'className' => 'Presenca',
			'foreignKey' => 'presenca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
