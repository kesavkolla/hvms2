<?php echo $html->script('hvms', array('inline' => false)); ?>

<div id="left-nav">
	<?php echo $this->Form->create(null, array('id' => 'JobSearchForm'));?>
	<h3>Narrow Your Search</h3>
	<div class="input interested">
		<?php echo $this->Form->checkbox('interested'); ?>
		Only show jobs I'm interested in
	</div>
	
	<?php
	echo $this->Form->input('role', array(
										 'type' => 'select',
										 'multiple' => true,
										 'size' => 4,
										 'label' => 'Role',
										 'class' => 'multi-select',
										 'options' => $this->Inputs->getJobRoles()));

	?>
	
	<div class="input">
		<label>Skills Required</label>
		<div class="skillbox">
		<?php echo $this->element('skills', array('data' => $skills, 'selectedSkills' => $selectedSkills)) ?>
		</div>
	</div>
	
	<?php echo $this->Form->end(__('Search', true));?>
</div>

<div id="right-content">
	<h3><?php echo $searchHeading ?></h3>
	<?php
	foreach ($jobs as $job) {
		$userFlagged = in_array($job['Job']['id'], $userInterestIds);
		echo ($this->element('job/job_display_abbrev',
				     array('job' => $job,
						   'userFlagged' => $userFlagged)));
	}
	?>
</div>