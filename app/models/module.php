<?php
class Module extends AppModel {
	public $name = 'Module';
	public $displayField = 'modulename';
	
	public $belongsTo = array('Vendor');
        public $hasMany = array('Version');
}