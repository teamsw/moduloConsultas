<?php
App::uses('FormaAtendimento', 'Model');

/**
 * FormaAtendimento Test Case
 *
 */
class FormaAtendimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forma_atendimento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormaAtendimento = ClassRegistry::init('FormaAtendimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormaAtendimento);

		parent::tearDown();
	}

}
