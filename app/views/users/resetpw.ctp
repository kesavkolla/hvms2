<?php
    echo $form->create('User', array('action' => 'resetpw'));
    //echo $form->input('username');
    echo $form->input('old_password', array('label' => 'Password', 'type' => 'password'));
    echo $form->input('tmp_password', array('label' => 'New Password', 'type' => 'password'));
    echo $form->input('confirm_password', array('label' => 'Retype Password', 'type' => 'password'));
    echo $form->end('Change Password');
?>