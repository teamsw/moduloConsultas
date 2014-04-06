<?php
/**
 * EnderecoFixture
 *
 */
class EnderecoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'logradouro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'numero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'complemento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'bairro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'cidade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'estado' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'cep' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'obs' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'logradouro' => 'Lorem ipsum dolor sit amet',
			'numero' => 'Lorem ipsum dolor sit amet',
			'complemento' => 'Lorem ipsum dolor sit amet',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cidade' => 'Lorem ipsum dolor sit amet',
			'estado' => 'Lorem ipsum dolor sit amet',
			'cep' => 'Lorem ipsum dolor sit amet',
			'obs' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-05 02:02:57',
			'modified' => '2014-04-05 02:02:57'
		),
	);

}
