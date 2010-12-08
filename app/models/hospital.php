<?php
class Hospital extends AppModel {
	public $name = 'Hospital';
	public $displayField = 'name';

	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'hospital_id',
			'dependent' => false,
			'conditions' => 'User.type = "hosp"',
		)
	);

}
?>