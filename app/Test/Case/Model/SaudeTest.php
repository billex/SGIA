<?php
App::uses('Saude', 'Model');

/**
 * Saude Test Case
 *
 */
class SaudeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.saude'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Saude = ClassRegistry::init('Saude');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Saude);

		parent::tearDown();
	}

}
