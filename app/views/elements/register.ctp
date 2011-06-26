<?php
        echo $form->input('username');
        echo $form->input('tmp_password', array('label' => 'Password', 'type' => 'password'));
        echo $form->input('confirm_password', array('type' => 'password'));
?>