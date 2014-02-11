<?php
/**
 * WorkoutFixture
 *
 */
class WorkoutFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'biginteger', 'null' => false, 'default' => null),
		'rkactid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'starttime' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'importtime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'rkactid' => array('column' => 'rkactid', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'ujis', 'collate' => 'ujis_japanese_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'user_id' => '',
			'rkactid' => 'Lorem ipsum dolor sit amet',
			'starttime' => 1377934872,
			'importtime' => 1377934872,
			'type' => 'Lorem ipsum dolor '
		),
	);

}
