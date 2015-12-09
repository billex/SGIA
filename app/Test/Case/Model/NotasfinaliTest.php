<?php
App::uses('Notasfinali', 'Model');

/**
 * Notasfinali Test Case
 *
 */
class NotasfinaliTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notasfinali',
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
		$this->Notasfinali = ClassRegistry::init('Notasfinali');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Notasfinali);

		parent::tearDown();
	}

}
