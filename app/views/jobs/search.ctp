<div id="left-nav">
	<?php echo $this->Form->create(null, array('id' => 'JobSearchForm'));?>

	<div class="input">
		<label>Skills Required</label>
		<div class="skillbox">
		<?php echo $this->element('skills', array('data' => $skills, 'selectedSkills' => $selectedSkills)) ?>
		</div>
	</div>
	
	<?php echo $this->Form->end(__('Search', true));?>
</div>

<div id="right-content">
	<h3>Search Results</h3>
	<?php
	foreach ($jobs as $job) {
		echo ($this->element('job/job_display_abbrev',
				     array('job' => $job)));
				echo ($this->element('job/job_display_abbrev',
				     array('job' => $job)));
						echo ($this->element('job/job_display_abbrev',
				     array('job' => $job)));
	}
	?>
</div>