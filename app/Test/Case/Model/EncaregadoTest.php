<?php
App::uses('Encaregado', 'Model');

/**
 * Encaregado Test Case
 *
 */
class EncaregadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.encaregado',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.brother',
		'app.pagamento',
		'app.documento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Encaregado = ClassRegistry::init('Encaregado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encaregado);

		parent::tearDown();
	}

}
