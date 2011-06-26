<div style="border: 1px solid #333; padding: 5px;">
	<?php $jobID = $job['Job']['id']; ?>

	<a href="#" onclick="$('#admin-<?php echo $jobID ?>').toggle(); return false;">Admin - Job Dump</a>
	<div id="admin-<?php echo $jobID ?>" style="display: none">
	<?php
		foreach($job['Job'] as $label => $value) {
			echo "<strong>$label</strong>: $value <br/>";
		}
	?>
	<?php
	echo $this->Html->link('See interests in this job', array('admin' => true,
															  'controller' => 'interests',
															  'action' => 'index',
															  null,
															  '?' => array('job_id' => $jobID)));
	?>
	</div>

</div>