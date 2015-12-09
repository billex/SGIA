<?php
App::uses('Paut', 'Model');

/**
 * Paut Test Case
 *
 */
class PautTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paut',
		'app.classa',
		'app.ano',
		'app.disciplina',
		'app.registo',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.documento',
		'app.encaregado',
		'app.brother',
		'app.educacaoanteriore',
		'app.pagamento',
		'app.anos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paut = ClassRegistry::init('Paut');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paut);

		parent::tearDown();
	}

}
