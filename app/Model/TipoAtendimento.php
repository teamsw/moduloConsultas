<?php
App::uses('AppModel', 'Model');
/**
 * TipoAtendimento Model
 *
 * @property Consulta $Consulta
 * @property Consulta $Consulta
 */
class TipoAtendimento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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
			'foreignKey' => 'tipo_atendimento_id',
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
