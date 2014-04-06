<?php
App::uses('AppModel', 'Model');
/**
 * Consulta Model
 *
 * @property Pessoa $Pessoa
 * @property Agenda $Agenda
 * @property FormaAtendimento $FormaAtendimento
 * @property TipoAtendimento $TipoAtendimento
 * @property Agenda $Agenda
 * @property Especialidade $Especialidade
 * @property FormaAtendimento $FormaAtendimento
 * @property TipoAtendimento $TipoAtendimento
 */
class Consulta extends AppModel {


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
		'Agenda' => array(
			'className' => 'Agenda',
			'foreignKey' => 'agenda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FormaAtendimento' => array(
			'className' => 'FormaAtendimento',
			'foreignKey' => 'forma_atendimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoAtendimento' => array(
			'className' => 'TipoAtendimento',
			'foreignKey' => 'tipo_atendimento_id',
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
		'Agenda' => array(
			'className' => 'Agenda',
			'foreignKey' => 'consulta_id',
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
		'Especialidade' => array(
			'className' => 'Especialidade',
			'foreignKey' => 'consulta_id',
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
		'FormaAtendimento' => array(
			'className' => 'FormaAtendimento',
			'foreignKey' => 'consulta_id',
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
		'TipoAtendimento' => array(
			'className' => 'TipoAtendimento',
			'foreignKey' => 'consulta_id',
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
