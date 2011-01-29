<?php
class AppModel extends Model { 
	protected $controllerAction = null;
 
	function setControllerAction( $action = null ) {
		if($action) {
			$this->controllerAction = $action;
		}
	} 
}