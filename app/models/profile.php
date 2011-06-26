<?php

class Profile extends AppModel {
    public $name = 'Profile';                
    public $actsAs = array('Containable');
    public $belongsTo = 'User';
    public $hasMany = 'ProfileRole';

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
    
    // get 10 trusted profiles
    function trustedTen($fields = null) {
        $this->recursive = -1;
        $conditions = array( 
            'Profile.trusted' => 1,
            'Profile.published' => 1 ,
            'Profile.status' => 1
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
