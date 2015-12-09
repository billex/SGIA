<?php
App::uses('Professore', 'Model');

/**
 * Professore Test Case
 *
 */
class ProfessoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.professore',
		'app.disciplina',
		'app.classa',
		'app.ano',
		'app.registo',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.documento',
		'app.encaregado',
		'app.brother',
		'app.educacaoanteriore',
		'app.pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Professore = ClassRegistry::init('Professore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Professore);

		parent::tearDown();
	}

}
