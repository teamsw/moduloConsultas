<?php
App::uses('AppModel', 'Model');
/**
 * Agenda Model
 *
 * @property Pessoa $Pessoa
 * @property Consulta $Consulta
 * @property Consulta $Consulta
 */
class Agenda extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Consulta' => array(
			'className' => 'Consulta',
			'foreignKey' => 'consulta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Consulta' => array(
			'className' => 'Consulta',
			'foreignKey' => 'agenda_id',
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
