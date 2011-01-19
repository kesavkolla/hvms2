<div class="jobs form">
<?php echo $this->Form->create('Job');?>
	<fieldset>
 		<legend><?php __('Admin Add Job'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('jobid');
		echo $this->Form->input('startdate');
		echo $this->Form->input('enddate');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('jobtype');
		echo $this->Form->input('schedule');
		echo $this->Form->input('comments');
		echo $this->Form->input('ratemin');
		echo $this->Form->input('ratemax');
		echo $this->Form->input('expensespaid');
		echo $this->Form->input('role');
		echo $this->Form->input('openings');
		echo $this->Form->input('status');
		echo $this->Form->input('published');
		echo $this->Form->input('Module');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('action' => 'index'));?></li>
	</ul>
</div>