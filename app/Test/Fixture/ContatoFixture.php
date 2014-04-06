<?php
/**
 * ContatoFixture
 *
 */
class ContatoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'telefone' => array('type' => 'integer', 'null' => true, 'default' => null),
		'telefoneComercial' => array('type' => 'integer', 'null' => true, 'default' => null),
		'ramal' => array('type' => 'integer', 'null' => true, 'default' => null),
		'celular' => array('type' => 'integer', 'null' => true, 'default' => null),
		'fax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'telefone' => 1,
			'telefoneComercial' => 1,
			'ramal' => 1,
			'celular' => 1,
			'fax' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-04-05 02:02:50',
			'modified' => 1
		),
	);

}
