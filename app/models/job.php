<?php

class Job extends AppModel {
    public $name = 'Job';
    public $actsAs = array('Containable');
    public $belongsTo = 'User';
    public $hasAndBelongsToMany = array(
        'Module' =>
            array(
                'className'              => 'Module',
                'joinTable'              => 'jobs_skills',
                'foreignKey'             => 'job_id',
                'associationForeignKey'  => 'module_id',
                'unique'                 => true,
            )
    );
}
?>