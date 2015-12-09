<?php
/**
 * PautFixture
 *
 */
class PautFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'classa_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'aluno_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'disciplina_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'anos_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'classa_id' => 1,
			'aluno_id' => 1,
			'disciplina_id' => 1,
			'anos_id' => 1
		),
	);

}
