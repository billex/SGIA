<?php
App::uses('Disciplina', 'Model');

/**
 * Disciplina Test Case
 *
 */
class DisciplinaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disciplina',
		'app.classa',
		'app.turma',
		'app.ano',
		'app.user',
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
		$this->Disciplina = ClassRegistry::init('Disciplina');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Disciplina);

		parent::tearDown();
	}

}
