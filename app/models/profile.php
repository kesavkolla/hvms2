<?php

class Profile extends AppModel {
    public $name = 'Profile';                
    public $belongsTo = 'User';
    public $hasAndBelongsToMany = array(
        'Version' =>
            array(
                'className'              => 'Version',
                'joinTable'              => 'profiles_skills',
                'foreignKey'             => 'profile_id',
                'associationForeignKey'  => 'version_id',
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
        'title' => array (
                            'rule' => 'notEmpty',
                            'required' => true
        )
    );
    
    function published($fields = null) { 
        $conditions = array( 
            $this->name . '.published' => 1 
        );     
        return $this->findAll($conditions, $fields); 
    } 
}
?>
