<?php

class User extends AppModel {
    public $name = 'User';
    public $validate = array(
        'username' => array (
                             'rule' => 'email',
                             'required' => true,
                             'allowEmpty' => false,
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
        if ($this->validates()) { // populate the password field
            $this->data['User']['password'] =  Security::hash($this->data['User']['tmp_password'], null, true); 
            return true;
        }
        return false;
    }
}

?>
