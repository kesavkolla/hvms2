<?php
class InterestsController extends AppController {
	public $name = 'Interests';
	public $helpers = array('Inputs', 'Number', 'Time');
	
	public $components = array('Session');

    function flag() {
        $this->autoRender = false;
        if (isset($this->params['form']) && isset($this->params['form']['interestId'])) {
			$interestData = $this->getInterestData($this->params['form']['interestId']);
			
			$this->Interest->recursive = -1;

			if ($this->Interest->save($interestData)) {
			   echo 1;
			}
			echo '';
        }     
    }
	
    function unflag() {
        $this->autoRender = false;
        if (isset($this->params['form']) && isset($this->params['form']['interestId'])) {
			$interestData = $this->getInterestData($this->params['form']['interestId']);
			
			$this->Interest->recursive = -1;
			$interest = $this->Interest->find('first', array(
														   'conditions' =>$interestData['Interest']));
			if ($this->Interest->delete($interest['Interest']['id'], false)) {
				echo 1;
			}
            echo '';
        }     
    }
	
	private function getInterestData ($interestId) {
		$interestedUser = $this->Session->read('Auth.User.id');
		$interestType = $this->Session->read('Auth.User.type') == 'cand' ?
						  'job' :
						  'cand';
						  
		$interestData = array();
		$interestData['Interest'] = array(
									  'user_id' => $interestedUser,
									  'interest_id' => $interestId,
									  'interest_type' => $interestType,
									  );
		return $interestData;
	}
	
	function index() {
		$interestedUser = $this->Session->read('Auth.User.id');
		$userType = $this->Session->read('Auth.User.type');
		if ($userType == 'cand') {
			$interestType = 'job';
			$containArray = array('Job' =>
								  array (
                                            'Module.modulename' => array(
                                                'Vendor.vendorname',
                                        )));								  
		}
		else if ($userType == 'hosp'){
			$interestType = 'cand';
			$containArray = array('Profile' =>
								  array (
                                            'Module.modulename' => array(
                                                'Vendor.vendorname',
                                        )));
		}

		$interestData = array();
		$interestItems = $this->Interest->find ( 'all',
								array(			
										'conditions' => array (
										  'Interest.user_id' => $interestedUser,
										  'Interest.interest_type' => $interestType,										
										),
										'order' => 'Interest.interest_id DESC',
										'contain' => $containArray
									)
									  );
		 
		$this->set('interestItems' , $interestItems);
	}
}
   
?>