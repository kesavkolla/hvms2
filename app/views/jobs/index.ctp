<div class="jobs index">
	<h2><?php __('Jobs');?></h2>
	<?php
	foreach ($jobs as $job) {
		echo ($this->element('job/job_display',
				     array('job' => $job)));	
	}
	?>
	
		<div class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $job['Job']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['Job']['id'])); ?>
		</div>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>