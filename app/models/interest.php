<?php
class Interest extends AppModel {
	var $name = 'Interest';
	var $actsAs = array('Containable');
	
	var $belongsTo = array (
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'interest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),

		'Profile' => array(
			'className' => 'Profile',
			'foreignKey' => 'interest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	 
	function getInterestIdsForUser($userId) {
		$this->recursive = -1;
  		$interests = $this->find('list',
								 array (
									'conditions' => array('Interest.user_id' => $userId),
									'fields' => 'interest_id'
								 ));
		return $interests;
	}	
    
}
?>