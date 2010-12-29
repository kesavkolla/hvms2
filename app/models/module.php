<?php
class Module extends AppModel {
	public $name = 'Module';
	public $displayField = 'modulename';
	public $actsAs = array('Containable');
	
	public $belongsTo = array('Vendor');
        public $hasMany = array('Version');
}