<?php
/**
 * FormaAtendimentoFixture
 *
 */
class FormaAtendimentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'convenio' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'plano' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipo' => 'Lorem ipsum dolor sit amet',
			'convenio' => 'Lorem ipsum dolor sit amet',
			'plano' => 'Lorem ipsum dolor sit amet'
		),
	);

}
