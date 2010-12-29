<?php
class Vendor extends AppModel {
	public $name = 'Vendor';
	public $displayField = 'vendorname';
	public $hasMany = array('Module');
	public $actsAs = array('Containable');
	
	function getChainedSkills () {
		$result = array();
		$vendorList = $this->find('all',
								  array(
										'contain' => array(
													 'Module.modulename' =>
														array (
															   'Version.versionname'
															  )
													 ),										
										)							  
								 );
		return ($vendorList);
	}
}
?>