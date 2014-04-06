<?php
/**
 * FuncionarioFixture
 *
 */
class FuncionarioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'registro' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50),
		'dataAdmissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'dataDemissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'titulacao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
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
			'registro' => 1,
			'dataAdmissao' => '2014-04-05',
			'dataDemissao' => '2014-04-05',
			'titulacao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
