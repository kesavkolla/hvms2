<?php

class User extends AppModel {
    public $name = 'User';
    public $actsAs = array('Containable');
    public $hasOne = 'Profile';
    public $belongsTo = 'Hospital';
    public $hasMany = 'Job';

    public $validate = array(
        'username' => array (
                             'rule' => 'email',
                             'required' => true,
                             'allowEmpty' => false,
                             'message' => 'Please enter a valid email'
                            ),
        'tmp_password' => array(
                            'rule' => array('minLength', '8'),
                            'message' => 'Mimimum 8 characters long',
                            'allowEmpty' => false,
                            ),
        'confirm_password' => array(
                            'matchpw' => array (
                                'rule' => 'validatePasswordConfirm',
                                'message' => 'Passwords must match',
                                'required'      => true,
                                )
                            ),
                                  
    );

    function validatePasswordConfirm($data)  
    {
        if ($this->data['User']['tmp_password'] !== $this->data['User']['confirm_password'])  
        {
            return false;  
        }  
   
        return true;  
    }

    function getConfirmationHash() {
        $fields = $this->read();
        return md5($fields['User']['created']) . md5($fields['User']['username']);
    }

    function beforeSave() {
        if (isset($this->data['User']['tmp_password']) && $this->validates()) { // populate the password field
            $this->data['User']['password'] =  Security::hash($this->data['User']['tmp_password'], null, true); 
        }
        
        if (isset($this->data['User']['type']) && $this->data['User']['type'] == 'cand') {
            unset($this->data['User']['hospital_id']);
        }
        return true;
    }
 
    function published($fields = null) { 
        $conditions = array( 
            $this->name . '.published' => 1 
        ); 
     
        return $this->findAll($conditions, $fields); 
    }
   
}

?>
