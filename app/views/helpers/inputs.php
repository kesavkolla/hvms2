<?php
class InputsHelper extends AppHelper {
    function getJobTypes() {
        $jobTypes = array(
            'permanent' => 'permanent',
            'contract' => 'contract',
            'contract w/ right to hire' => 'contract w/ right to hire',
            'contract to hire' => 'contract to hire',
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
            'Other' => 'Other'
        );
    }
    
    function getCandidateNotice () {
        return array (
                'Immediate' => 'Immediate',
                '1 Week Notice' => '1 Week Notice',
                '2 Weeks Notice' =>  '2 Weeks Notice',
                '3 Weeks Notice' =>  '3 Weeks Notice',
                '4 Weeks Notice' =>  '4 Weeks Notice',
                'Other' => 'Other'
        );
    }
}
?>