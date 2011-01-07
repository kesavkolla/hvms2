<?php
class InputsHelper extends AppHelper {
    function getJobTypes() {
        $jobTypes = array(
            'permanent' => 'Permanent',
            'contract' => 'Contract',
            'contract w/ right to hire' => 'Contract w/ right to hire',
            'contract to hire' => 'Contract to hire',
        );
        return $jobTypes;
    }
    
    function getJobSchedules() {
        $schedule1 = array (
            'M - Th' => 'M - Th',
            'M - F' => 'M - F',
            'Remote' => 'Remote',
        );
        
        $schedule2 = array (
            '25% remote' => '25% remote',
            '50% remote' => '50% remote',
            '75% remote' => '75% remote',
        );
        
        return array ($schedule1, $schedule2);
    }
    
    function getJobExpenses() {
        return array(
            0 => 'No',
            1 => 'Yes'
        );
    }
    
    function getJobRoles () {
        return array (
            'Builder' => 'Builder',
            'Trainer' => 'Trainer',
            'QA Tester' => 'QA Tester',
            'Project Manager' => 'Project Manager',
            'Interface Analyst' => 'Interface Analyst',
            'Report Writer' => 'Report Writer',
        );
    }
    
    function getCandidateNotice () {
        return array (
                'Immediate' => 'Immediate',
                '1 Week Notice' => '1 Week Notice',
                '2 Weeks Notice' =>  '2 Weeks Notice',
                '3 Weeks Notice' =>  '3 Weeks Notice',
                '4 Weeks Notice' =>  '4 Weeks Notice',
        );
    }
    
    function getStatesList () {
        $state_list = array('AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
        
        return $state_list;
    }
    
    public function getPublishedStatuses () {
        return array (
            0 => 'No',
            1 => 'Yes');
    }
    
    /* dbRolesArray is of the form:
      array (
            [0] => Array
                (
                    [role] => Interface Analyst
                )

            [1] => Array
                (
                    [role] => Other.billing analyst
                )

            [2] => Array
                (
                    [role] => Report Writer
                )
      )
    */
    public function formatRoles($dbRolesArray) {
        $rolesArray = Set::classicExtract($dbRolesArray, '{n}.role');
        $rolesString = implode('; ', $rolesArray);
        return $this->formatReplace($rolesString);
    }
     
    public function formatReplace($stringToFormat) {
        return str_replace(Configure::read('field.COMMA_ENCODE'), ', ' , $stringToFormat); 

    }
}
?>