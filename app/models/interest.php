<?php
class Interest extends AppModel {
	var $name = 'Interest';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
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