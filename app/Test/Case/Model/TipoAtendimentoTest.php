<?php
App::uses('TipoAtendimento', 'Model');

/**
 * TipoAtendimento Test Case
 *
 */
class TipoAtendimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_atendimento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoAtendimento = ClassRegistry::init('TipoAtendimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoAtendimento);

		parent::tearDown();
	}

}
