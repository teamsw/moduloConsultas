<?php
/**
 * PessoaFixture
 *
 */
class PessoaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'cpf_cnpj' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 50),
		'rg' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50),
		'numeroPronturario' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 100),
		'estadoCivil' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'dataNascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'escolaridade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'profissao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'peso' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50),
		'altura' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sexo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
		'idade' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 50),
		'filiacao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_german2_ci', 'charset' => 'utf8'),
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'cpf_cnpj' => 1,
			'rg' => 1,
			'numeroPronturario' => 1,
			'estadoCivil' => 'Lorem ipsum dolor sit amet',
			'dataNascimento' => '2014-04-05',
			'escolaridade' => 'Lorem ipsum dolor sit amet',
			'profissao' => 'Lorem ipsum dolor sit amet',
			'peso' => 1,
			'altura' => 1,
			'created' => '2014-04-05 18:47:20',
			'modified' => '2014-04-05 18:47:20',
			'sexo' => 'Lorem ipsum dolor sit amet',
			'idade' => 1,
			'filiacao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
