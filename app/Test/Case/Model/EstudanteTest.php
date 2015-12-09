<?php
App::uses('Estudante', 'Model');

/**
 * Estudante Test Case
 *
 */
class EstudanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estudante',
		'app.genro',
		'app.nacionalidade',
		'app.aluno',
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
		$this->Estudante = ClassRegistry::init('Estudante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estudante);

		parent::tearDown();
	}

}
