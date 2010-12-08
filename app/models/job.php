<?php

class Job extends AppModel {
    public $name = 'Job';
    public $actsAs = array('Containable');
    public $belongsTo = 'User';
    public $hasAndBelongsToMany = array(
        'Version' =>
            array(
                'className'              => 'Version',
                'joinTable'              => 'jobs_skills',
                'foreignKey'             => 'job_id',
                'associationForeignKey'  => 'version_id',
                'unique'                 => true,
            )
    );
}
?>