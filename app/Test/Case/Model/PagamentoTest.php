<?php
App::uses('Pagamento', 'Model');

/**
 * Pagamento Test Case
 *
 */
class PagamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pagamento',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.brother',
		'app.encaregado',
		'app.documento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pagamento = ClassRegistry::init('Pagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pagamento);

		parent::tearDown();
	}

}
