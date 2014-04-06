<?php
App::uses('Dependente', 'Model');

/**
 * Dependente Test Case
 *
 */
class DependenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dependente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dependente = ClassRegistry::init('Dependente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dependente);

		parent::tearDown();
	}

}
