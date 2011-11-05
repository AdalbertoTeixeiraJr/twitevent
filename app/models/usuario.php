<?php
class Usuario extends AppModel {
	var $name = 'Usuario';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Presenca' => array(
			'className' => 'Presenca',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Seguindo' => array(
			'className' => 'Seguindo',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
