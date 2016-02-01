<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.group',
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
		'app.notasfinali',
		'app.pagamento',
		'app.paut',
		'app.anos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
