<?php
/* ProfileRole Fixture generated on: 2011-01-07 11:01:32 : 1294429292 */
class ProfileRoleFixture extends CakeTestFixture {
	var $name = 'ProfileRole';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'profile_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'role' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'profile_id' => array('column' => array('profile_id', 'role'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'profile_id' => 1,
			'role' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>