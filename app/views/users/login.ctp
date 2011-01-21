<?php
    if (isset($success))     {
        echo $success;
    }
    else {
        echo $form->create('User', array('action' => 'login'));
        echo $form->input('username', array('label' => 'Email'));
        echo $form->input('password');
        echo $form->input('remember_me',array('label' => 'Remember Me','type'=>'checkbox','checked' => 'false'));
    
        echo $form->end('Login');
        
        echo $html->link('Forgot Password','/users/forgot/');
    }
?>
