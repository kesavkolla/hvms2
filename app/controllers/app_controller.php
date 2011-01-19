<?php

class AppController extends Controller {
  public $components = array('RequestHandler', 'Session', 'Auth');
  
  // called before every single action
  function beforeFilter() {
      // if admin pages are being requested
      if(isset($this->params['admin'])) {
          // check the admin is logged in
          // this method is in the app_controller.php file
          $this->checkAdminSession();
      }
      
      $user = $this->Auth->user();
      $this->{$this->modelClass}->userType = $user['User']['type']; 
  }
    
  function checkAdminSession() {
	// if the admin session hasn't been set
	if (!$this->Session->read('Auth.User.type') == 'admin') {
		// set flash message and redirect
		$this->Session->setFlash('You need to be logged in as an administrator to access this area');
		$this->redirect(array('controller' => 'users', 'action' => 'login', 'admin' => false));
	}
  }


}
?>