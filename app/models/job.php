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

     public $validate = array(
        'title' => array (
                            'rule' => 'notEmpty',
                             'required' => true,
                            ),
        'startdate' => array (
                            'rule' => 'notEmpty',
                             'required' => true,
                            ),
        'description' => array (
                            'rule' => 'notEmpty',
                             'required' => true,
                            ),        
        );   
    public function find($conditions = null, $fields = array(), $order = null, $recursive = null) {
        if (isset($this->userType )&& $this->userType == 'admin' ) {
            $this->contain("{$this->User->alias}.Hospital.code");
        }
        return parent::find($conditions, $fields, $order, $recursive);
    }
    
    public function afterFind($results) {
        foreach ($results as &$job) {
            if (isset($job['User']) && isset($job['User']['Hospital'])&& $this->controllerAction != 'protectJobID' ) {
                $hospCode = isset($job['User']['Hospital']['code']) ? $job['User']['Hospital']['code'] : '';
                $jobID = isset($job['Job']['jobid']) ? $job['Job']['jobid'] : '';
                $job['Job']['jobid'] = $hospCode . ' ' . $jobID;
            }
        }
        return $results;
    }
   
    // get 10 trusted jobs that are public
    function trustedTen($fields = null) {
        $this->recursive = -1;
        $conditions = array( 
            'Job.trusted' => 1,
            'Job.published' => 1 ,
            'Job.status' => 1 

        );     
        return $this->find('all',
                           array(
                            'conditions' => $conditions,
                            'limit' => 10,
                            'order' => $this->name . '.id DESC',
                            'fields' => $fields)); 
    } 
}
?>