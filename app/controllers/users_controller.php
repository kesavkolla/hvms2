<?php

class UsersController extends AppController {
    var $scaffold;
    
    public $components = array('Auth', /*'Security',*/ 'Session', 'Email');

    function beforeFilter() {
            $this->Auth->allow('index','register', 'confirm');
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
        if ($this->data) {
            if ($this->User->save($this->data, array('validate' => true))) {
                $this->sendVerifyEmail();
                $message = 'One more step to go! We have sent a confirmation email to you at ' . $this->data['User']['username']  . '.';
                $this->set('success', $message);
            }
            else {
                if ($invalidFields = $this->User->invalidFields()){
                    // invalid fields, let the framework take care of it
                }
                else {
                    $db =& ConnectionManager::getDataSource($this->User->useDbConfig);
                    $error = $db->lastError();
                    if (strstr($error, 'Duplicate entry'))  {
                        $error = 'This username is already registered. Please login to proceed.';
                        $this->User->invalidate('username', $error); // invalidate username 
                    }
                    
                    $this->set('errors', $error);
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
            $this->User->set('status', 1); // TODO - statuses go in config
        }
        
        if ($this->User->save()) {
            // do something intelligent here
            // redirect to xxx
        }
    }
    
    // TODO: change echo's to flashes
    function forgot () {
        if ($resetLink = $this->generateResetPwLink()) {
            echo 'auto_reset_pw/' . $resetLink;
        }
    }

    // TODO: change echo's to flashes    
    function auto_reset_pw($OTP, $expiry, $userID)  {
        if (time() > $expiry) {
            $this->Session->setFlash('This password link has expired. Please generate an new one.');
            $this->redirect('/users/forgot');
        }
        $user = $this->User->findById($userID);
        pr($this->generateOTP($expiry, $userID, $user['User']['password']));
        if ($OTP == $this->generateOTP($expiry, $userID, $user['User']['password'])) {
            $user['User']['tmp_password'] = $OTP;
            $user['User']['confirm_password'] = $OTP;
            if ($this->User->save($user)) {
                $this->Session->setFlash('Successfully saved. Please reset ASAP (make message better).');
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
}

?>
