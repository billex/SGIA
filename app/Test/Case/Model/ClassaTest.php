<?php
App::uses('Classa', 'Model');

/**
 * Classa Test Case
 *
 */
class ClassaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.classa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Classa = ClassRegistry::init('Classa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Classa);

		parent::tearDown();
	}

}
