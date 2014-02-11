<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'rkid' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'rkname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'rkgender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'rkpicture' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'rktoken' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'ujis_japanese_ci', 'charset' => 'ujis'),
		'create_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'type' => 'Lorem ipsum dolor ',
			'rkid' => '',
			'rkname' => 'Lorem ipsum dolor sit amet',
			'rkgender' => 'Lorem ipsum dolor sit ame',
			'rkpicture' => 'Lorem ipsum dolor sit amet',
			'rktoken' => 'Lorem ipsum dolor sit amet',
			'create_timestamp' => 1377934766
		),
	);

}
