<?php
class Version extends AppModel {
	public $name = 'Version';
	public $actsAs = array('Containable');
	public $displayField = 'versionname';
	public $belongsTo = array('Module');
	
	public $hasAndBelongsToMany = array(
	    'Profile' =>
		array(
		    'className'              => 'Profile',
		    'joinTable'              => 'profiles_skills',
		    'foreignKey'             => 'version_id',
		    'associationForeignKey'  => 'profile_id',
		),

	    'Job' =>
		array(
		    'className'              => 'Job',
		    'joinTable'              => 'jobs_skills',
		    'foreignKey'             => 'version_id',
		    'associationForeignKey'  => 'job_id',
		    'unique'                 => true,
		)
	);
}
?>