<?php

class Profile extends AppModel {
    public $name = 'Profile';                
    public $actsAs = array('Containable');
    public $belongsTo = 'User';
    
    public $hasAndBelongsToMany = array(
        'Module' =>
            array(
                'className'              => 'Module',
                'joinTable'              => 'profiles_skills',
                'foreignKey'             => 'profile_id',
                'associationForeignKey'  => 'module_id',
                'unique'                 => true,
            )
    );
    
    public $validate = array(
        'firstname' => array (
                            'rule' => 'notEmpty',
                             'required' => true,
                            ),
        'lastname' => array (
                            'rule' => 'notEmpty',
                             'required' => true,
                            ),
        'phone' => array (
                             'rule' => 'phone',
                             'required' => true,
                             'allowEmpty' => false,
                             'message' => 'Please enter a valid phone number'
                            ),
    );
    
    function published($fields = null) { 
        $conditions = array( 
            $this->name . '.published' => 1 
        );     
        return $this->findAll($conditions, $fields); 
    } 
}
?>
