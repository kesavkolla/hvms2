<?php
class ProfilesController extends AppController {
		public $name = 'Profiles';
		public $helpers = array('Inputs');
	
		function search() {
			$this->set('profiles', $this->paginate());
		}

		function view($id = null) {
			if (!$id) {
				$this->Session->setFlash(__('Invalid profile', true));
				$this->redirect(array('action' => 'index'));
			}
			$this->set('profile', $this->Profile->findByUserId($id));
		}

		function edit() {
			$uid = $this->Session->read('Auth.User.id');
			if (!$uid) {
				$this->Session->setFlash(__('Invalid profile', true));
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				pr ($this->data);
				$fileUpload = $this->fileUpload();
				if (!($fileErrors = $fileUpload['error'])) {
					if ($existingProfile = $this->Profile->findByUserId($uid)) {
						if ($existingProfile['Profile']['user_id'] == $uid) {
							$this->data['Profile']['id'] = $existingProfile['Profile']['id'];
						}
						else { // this will probably never happen, but better safe than sorry
							$this->Session->setFlash('You cannot edit this profile.');
							$this->redirect('/');
						}
						
					}
					
					$profileData = $this->prepareProfileForDB($this->data);
					if ($this->Profile->save($profileData)) {
						$this->Session->setFlash(__('Your profile has been saved', true));
					}
					else {
						$this->Session->setFlash(__('The profile could not be saved. Please, try again.', true));
					}
				}
				else {
					$this->Profile->invalidate('resume_upload', $fileErrors);
				}
			}
			else if (empty($this->data)) {
				$profileDBData = $this->Profile->find('all',
                                        array('conditions' => array(
                                                 'Profile.user_id' => $uid
                                                 ),
                                                'contain' => array(
													'User' => array(
														'Version.versionname' => array (
															'Module.modulename' => array (
																'Vendor.vendorname'
															)
														),
                                                    )
                                                )
                                              )
                                              );
				$dbData = $profileDBData ? $profileDBData[0] : null;
				if ($dbData && $dbData['Profile']['resume_name']) {
					$fileName = $dbData['Profile']['resume_name'];
					$tmpName = FILES_DIR . $dbData['Profile']['resume_name'];
					$content = $dbData['Profile']['resume'];
					$fp  = fopen($tmpName, 'w');
					fwrite($fp, stripslashes($content));
					fclose($fp);
					$this->data = $this->prepareProfileForDisplay($dbData);
					$selectedSkills = $this->getVersionIds($this->data['Version']);
				}
			}
			$this->set('selectedSkills', isset($selectedSkills) ? $selectedSkills : array());
            $this->set('skills', ClassRegistry::init('Vendor')->getChainedSkills()); 
		}
		
		private function fileUpload() {
				$allowedExtensions = array('txt', 'doc', 'docx', 'pdf', 'rtf'); 
				$resumeData = $this->data['Profile']['resume_upload'];
				$retval = array();
				$retval['error'] = null;
				if (!$resumeData['error'] && $resumeData['size'] > 0) {
						$fileName = $resumeData['name'];
						$ext = substr($fileName, strrpos($fileName, '.') + 1);
						if (!in_array($ext, $allowedExtensions)) {
								$retval['error'] = 'This file type is not allowed. We accept MSWord documents, text files and PDF files. ';
						}
						else {
								$tmpName = $resumeData['tmp_name'];
								$fp  = fopen($tmpName, 'r');
								$content = fread($fp, filesize($tmpName));
								$content = addslashes($content);
								fclose($fp);
								$this->data['Profile']['resume'] = $content;
								$this->data['Profile']['resume_name'] = $fileName;
						}
				}
				return $retval;
		}

		private function prepareProfileforDB($data) {
				// add user id
				$data['Profile']['user_id'] = $this->Session->read('Auth.User.id');
		
				$profileFormData = &$data['Profile'];
				
				// startavailability
				 if (isset($profileFormData['startavailability-other']) && $profileFormData['startavailability'] == 'Other') {
					$profileFormData['startavailability'] .= ': ' . $profileFormData['startavailability-other'];
					unset($profileFormData['startavailability-other']); 
				}
				
				// role
				 if (isset($profileFormData['role-other']) && $profileFormData['role'] == 'Other') {
					$profileFormData['role'] .= ': ' . $profileFormData['role-other'];
					unset($profileFormData['role-other']); 
				}
				
				return $data;
		}

	private function prepareProfileForDisplay ($data) {
        $profileDataFromDB = &$data['Profile'];

        // startavailability
		if (isset($profileDataFromDB['startavailability'])) {
            $startavailabilityInfo = explode (':', $profileDataFromDB['startavailability']);
            $profileDataFromDB['startavailability'] = trim($startavailabilityInfo[0]);
            if (isset($startavailabilityInfo[1])) {
                $profileDataFromDB['startavailability-other'] = trim($startavailabilityInfo[1]);
            }    
        }
        
        // role
        if (isset($profileDataFromDB['role'])) {
            $roleInfo = explode (':', $profileDataFromDB['role']);
            $profileDataFromDB['role'] = trim($roleInfo[0]);
            if (isset($roleInfo[1])) {
                $profileDataFromDB['role-other'] = trim($roleInfo[1]);
            }    
        }
        return $data;
    }
	
	// repeated from jobs_controller,
	// not DRY, but doesn't seem worth making a component for
    private function getVersionIds($versionsArray) {
        $versionIds = array();
        foreach ($versionsArray as $version) {
            $versionIds[] = $version['id'];
        }
        return $versionIds;
    }
/*
	function admin_index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid profile', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('profile', $this->Profile->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Profile->create();
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid profile', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Profile->read(null, $id);
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Profile->delete($id)) {
			$this->Session->setFlash(__('Profile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Profile was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
*/
}
?>