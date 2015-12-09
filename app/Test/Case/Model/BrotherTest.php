<?php
App::uses('Brother', 'Model');

/**
 * Brother Test Case
 *
 */
class BrotherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.brother',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.encaregado',
		'app.pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Brother = ClassRegistry::init('Brother');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Brother);

		parent::tearDown();
	}

}
