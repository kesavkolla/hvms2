<?php

class Profile extends AppModel {
    public $name = 'Profile';                
    public $belongsTo = 'User';
    
    function published($fields = null) { 
        $conditions = array( 
            $this->name . '.published' => 1 
        );     
        return $this->findAll($conditions, $fields); 
    } 
}
?>
