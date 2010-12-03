<?php
    echo $form->create('User', array('action' => 'register_hosp'));
    echo ($this->element('register'));
    echo $form->hidden('type', array('value'=> 'hosp'));
    echo $form->input('hospital_id', array('options' => $hospitals,
                                           'label' => 'Hospital'));
    echo $form->end('Register as a Job Poster');
?>