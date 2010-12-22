<?php
class InterestsController extends AppController {
	public $name = 'Interests';
	
	public $components = array('Session');

    function flag() {
        $this->autoRender = false;
        if (isset($this->params['form']) && isset($this->params['form']['interestId'])) {
			$interestData = $this->getInterestData($this->params['form']['interestId']);
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
			if ($this->Interest->deleteAll($interestData['Interest'])) {
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
	private function createInterest($interestId) {

		/* no error checking here - it's an asynchronous action */
	}
   
}
?>