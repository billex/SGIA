<?php
App::uses('Nacionalidade', 'Model');

/**
 * Nacionalidade Test Case
 *
 */
class NacionalidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nacionalidade',
		'app.aluno',
		'app.genro',
		'app.brother',
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
		$this->Nacionalidade = ClassRegistry::init('Nacionalidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nacionalidade);

		parent::tearDown();
	}

}
