<?php
App::uses('Educacaoanteriore', 'Model');

/**
 * Educacaoanteriore Test Case
 *
 */
class EducacaoanterioreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.educacaoanteriore',
		'app.aluno',
		'app.genero',
		'app.nacionalidade',
		'app.documento',
		'app.encaregado',
		'app.brother',
		'app.pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Educacaoanteriore = ClassRegistry::init('Educacaoanteriore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Educacaoanteriore);

		parent::tearDown();
	}

}
