<?php

    echo $form->create('User', array('action' => 'register'));
    echo ($this->element('register'));
    
    $types = array('cand' => 'Job Seeker', 'hosp' => 'Job Poster');
    echo $form->input('type', array(
                                    'options' => $types,
                                    'empty' => false,
                                    'id' => 'register-type',
                                    'label' => 'Register as a ' ));
    
    echo '<div id="hosp-select" style="display:none">';
    echo $form->input('hospital_id', array('options' => $hospitals,
                                           'label' => 'Hospital'));
    echo '</div>';
    echo $form->end('Register');

?>
<script type="text/javascript">
$("#register-type").change ( function() {
                                if ($("#register-type").val() == 'hosp') {
                                    $("#hosp-select").show();   
                                }
                                else {
                                    $("#hosp-select").hide();
                                }
                        });
</script>
