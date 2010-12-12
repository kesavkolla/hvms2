<?php

class UsersController extends AppController {
    public $scaffold;
    public $uses = array('User', 'Hospital');
    public $components = array('Auth', /*'Security',*/ 'Session', 'Email');
    
    function beforeFilter() {
            $this->Auth->allow('index', 'register', 'register_cand', 'register_hosp', 'confirm');
            
            parent::beforeFilter();
            //$this->Security->blackHoleCallback = 'forceSsl';
            //$this->Security->requireSecure('login', 'register');
    }

 
    function login() {
    }
    

    function logout() {
       $this->redirect($this->Auth->logout());
    }

    
    function register() {
        if ($this->Auth->user()) {
            $this->redirect('/');
        }
        $this->set('hospitals', $this->Hospital->find('list',
                                      array('fields' => array('Hospital.id', 'Hospital.name'))));

        if ($this->data) {
            $this->User->create($this->data);
            if ($this->User->validates()) {
                // check hospital domain
                if ($this->validUserDomain()) {
                    if ($this->User->save($this->data, array('validate' => true))) {
                        $this->sendVerifyEmail();
                        $message = 'One more step to go! We have sent a confirmation email to you at ' . $this->data['User']['username']  . '.';
                        $this->Session->setFlash($message);
                    }
                    else {
                        if ($invalidFields = $this->User->invalidFields()){
                            // invalid fields, let the framework take care of it
                        }
                        else {
                            $db =& ConnectionManager::getDataSource($this->User->useDbConfig);
                            $error = $db->lastError();
                            if (strstr($error, 'Duplicate entry'))  {
                                $error = 'This email is already registered. Please login to proceed.';
                                $this->User->invalidate('username', $error); // invalidate username 
                            }
                            
                            $this->set('errors', $error);
                        }
                    }
                }
                else {
                        $error = 'Please enter an email that is associated with the hospital you have selected';
                        $this->User->invalidate('username', $error); // invalidate username 

                }
            }
        }
    }

    function forceSsl() {
        $this->redirect('https://' . $_SERVER['SERVER_NAME'] . $this->here);
    }
    
    function resetpw() {
        if ($this->data) {
            $user = $this->Auth->user();
            $currentpw = $this->User->findById($user['User']['id'], array('fields' => 'User.password'));
            if ($currentpw['User']['password'] == $this->Auth->password($this->data['User']['old_password'])) {
                $updatedData = array_merge_recursive($user, $this->data);
                if ($this->User->save($updatedData, array('validate' => true))) {
                    $message = 'Password successfully changed';
                    $this->Session->setFlash($message);
                }
            }
            else {
                $this->User->invalidate('old_password', 'Incorrect password for ' . $user['User']['username']);
            }
        }
        
    }
    
    function confirm($email, $hash) {
        $userData = $this->User->findByUsername($email);
        $this->User->create($userData);        
        if ($this->User->getConfirmationHash() == $hash) {
            $this->User->set('status', Configure::read('user.STATUS_VERIFIED'));
            if ($this->User->save(null, false)) {
                $this->Session->setFlash('Thank you for confirming your account. (TODO: redirect to somplace, my account maybe?)');
            }
            else {
                echo 'error';
                pr ($this->User->invalidFields());
            }
        }
    }
    
    // TODO: change echo's to flashes and actually generate the email
    function forgot () {
        if ($resetLink = $this->generateResetPwLink()) {
            echo 'auto_reset_pw/' . $resetLink;
        }
    }

    function auto_reset_pw($OTP, $expiry, $userID)  {
        if (time() > $expiry) {
            $this->Session->setFlash('This password link has expired. Please generate an new one.');
            $this->redirect('/users/forgot');
        }
        $user = $this->User->findById($userID);
        pr($this->generateOTP($expiry, $userID, $user['User']['password'])); // TODO - remove this line
        if ($OTP == $this->generateOTP($expiry, $userID, $user['User']['password'])) {
            $user['User']['tmp_password'] = $OTP;
            $user['User']['confirm_password'] = $OTP;
            if ($this->User->save($user)) {
                $this->Session->setFlash('We have successfully reset your password. You should change it immediately something that you can remember.');
                $this->redirect('/users/resetpw');    
            }
            else {
                $this->Session->setFlash('There was an error resetting your password. Please re-request a new password.');
                $this->redirect('/users/forgot');
            }
        }
        else {
            $this->Session->setFlash('There was an error resetting your password. Please re-request a new password.');
            $this->redirect('/users/forgot');    
        }
    }
    
    private function generateResetPwLink() {
        if ($this->data && isset($this->data['User']['username'])) {
            $user = $this->User->findByUsername($this->data['User']['username']);
            $expiry = time() + 86400; // 24 hours from now
            $userID = $user['User']['id'];
            $OTP = $this->generateOTP($expiry, $userID, $user['User']['password']);
            $pwLink = "$OTP/$expiry/$userID";
            return $pwLink;
        }
        return null;
    }
    
    private function generateOTP ($expiry, $userID, $currentpw) {
        $midOTP = Security::hash($currentpw, 'sha1', true);
        $OTP = Security::hash($midOTP . $expiry . $userID, 'sha1', true);
        return $OTP;
    }
    
    private  function sendVerifyEmail() {
        $hash = $this->User->getConfirmationHash();
        $user = $this->data['User'];
        $this->set('username', $user['username']);
        $this->set('hash', $hash);
        $this->Email->to = $user['username'];
        $this->Email->from = 'HealthVMS <noreply@healthvms.com>'; // TODO - put in config
        $this->Email->subject = 'Please confirm your registration with HealthVMS';
        $this->Email->template = 'reg_confirm';
        
        $this->Email->delivery = 'debug';

        $this->Email->send();
        
        pr($this->Session->read('Message.email'));
    }
    
    private function validUserDomain() {
        if (isset($this->data['User']['type']) &&
            $this->data['User']['type'] == 'hosp') {
            $hospital = $this->Hospital->findById($this->data['User']['hospital_id']);
            $uname = $this->data['User']['username'];
            $allowedDomains = explode(',', $hospital['Hospital']['domainsallowed']);
            foreach ($allowedDomains as $domain) {
                if (endswith($uname, $domain)) {
                    return true;
                }
            }
            return false;
        }
        else {
            return true;
        }
    }
    
}

?>
