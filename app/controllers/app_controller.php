<?php

class AppController extends Controller {
  public $components = array('RequestHandler', 'Session', 'Auth', 'Security');
  
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
      
      $this->Security->validatePost = false; // without this, form submission fails (all forms expect a security token)
      if(isset($this->params[Configure::read('Routing.admin')])){
        $this->Security->blackHoleCallback = 'forceSSL';
        $this->Security->requireSecure();      
	  }
      else if (!in_array($this->action, $this->Security->requireSecure)) {
        $this->forceNonSSL();
      }
      
  }
    
  function checkAdminSession() {
	// if the admin session hasn't been set
	if (!$this->Session->read('Auth.User.type') == 'admin') {
		// set flash message and redirect
		$this->Session->setFlash('You need to be logged in as an administrator to access this area');
		$this->redirect(array('controller' => 'users', 'action' => 'login', 'admin' => false));
	}
  }

  function forceSSL() {
      $this->redirect('https://' . $_SERVER['SERVER_NAME'] . $this->here);
  }
  
  function forceNonSSL() {
    if ($this->RequestHandler->isSSL()) {
      // force non-ssl only if they are on ssl to begin with 
      // (requires RequestHandler component)
      $this->redirect('http://' . env('SERVER_NAME') . $this->here);
    }
  }

  function forceProfile() {
    if ($this->Session->read('Auth.User.type') != 'admin' && 
        $uid = $this->Session->read('Auth.User.id')) {
      if (!$profile = classRegistry::init('Profile')->findByUserId($uid)) {
        $this->Session->setFlash('You must complete your profile before using the site.');
        $this->redirect(array('controller' => 'profiles', 'action' => 'edit'));
      }
    }
  }
}
?>
