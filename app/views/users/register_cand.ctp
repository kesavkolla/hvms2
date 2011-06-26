<?php
    echo $form->create('User', array('action' => 'register_cand'));
    echo ($this->element('register'));
    echo $form->end('Register as a Job Seeker');
?>
