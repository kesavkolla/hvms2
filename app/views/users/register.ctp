<?php
    echo $html->script('register', array('inline' => false)); 

    echo $form->create('User', array('action' => 'register'));
    
    $types = array('cand' => 'Job Seeker', 'hosp' => 'Job Poster');
    echo $form->input('type', array(
                                    'options' => $types,
                                    'empty' => false,
                                    'id' => 'register-type',
                                    'label' => 'Register as a ' ));

    echo $form->input('username', array('id' => 'username',
                                        'after' => '<span id="userinfo"></span>'));
    echo $form->input('tmp_password', array('label' => 'Password', 'type' => 'password'));
    echo $form->input('confirm_password', array('type' => 'password'));
    echo $form->hidden('hospital_id', array('id' => 'hospital_id'));
    
    echo '</div>';
    echo $form->end('Register');

?>
