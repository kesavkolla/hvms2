<?php
    if (isset($success)) {
        echo $success;
    }
    else {
        echo $form->create('User', array('action' => 'register'));
        echo $form->input('username');
        echo $form->input('tmp_password', array('label' => 'Password', 'type' => 'password'));
        echo $form->input('confirm_password', array('type' => 'password'));
        echo $form->end('Register');
    }
?>
