<?php
class Vendor extends AppModel {
	public $name = 'Vendor';
	public $displayField = 'vendorname';
	public $hasMany = array('Module');
	
	function getChainedSkills () {
		$result = array();
		$vendorList = $this->find('all');
		foreach ($vendorList as $index => &$vendor) {
			foreach ($vendor['Module'] as $vendorModules) {
				$module = $this->Module->findById($vendorModules['id']);
				$vendor['Module'][$index]['Version'] = $module['Version'];
			}
		}
		return ($vendorList);
	}
}
?>