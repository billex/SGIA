<?php
App::uses('Registo', 'Model');

/**
 * Registo Test Case
 *
 */
class RegistoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.registo',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.documento',
		'app.encaregado',
		'app.brother',
		'app.educacaoanteriore',
		'app.pagamento',
		'app.classa',
		'app.ano',
		'app.disciplina'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Registo = ClassRegistry::init('Registo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Registo);

		parent::tearDown();
	}

}
