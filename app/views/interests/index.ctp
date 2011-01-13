<?php echo $html->script('hvms', array('inline' => false)); ?>

<?php
if ($session->read('Auth.User.type') == 'cand') {
	foreach ($interestItems as $job) {
		// strcture data so it's usable by the job display element
		$job['Module'] = $job['Job']['Module'];
		unset($job['Job']['Module']);
		
		echo ($this->element('job/job_display_public',
				     array('job' => $job,
						   'userFlagged' => true)));
	}
}
else if ($session->read('Auth.User.type') == 'hosp') {
	foreach ($interestItems as $profile) {
		// strcture data so it's usable by the profile display element
		$profile['Module'] = $profile['Profile']['Module'];
		unset($profile['Profile']['Module']);
		
		echo ($this->element('profile/profile_display_public',
				     array('profile' => $profile,
						   'userFlagged' => true)));
	}
}
?>