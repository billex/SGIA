<?php
App::uses('Ano', 'Model');

/**
 * Ano Test Case
 *
 */
class AnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ano',
		'app.classa',
		'app.disciplina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ano = ClassRegistry::init('Ano');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ano);

		parent::tearDown();
	}

}
