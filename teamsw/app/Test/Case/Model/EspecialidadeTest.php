<?php
App::uses('Especialidade', 'Model');

/**
 * Especialidade Test Case
 *
 */
class EspecialidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.especialidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Especialidade = ClassRegistry::init('Especialidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Especialidade);

		parent::tearDown();
	}

}
