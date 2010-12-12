<div class="jobs index">
	<h2><?php __('Jobs');?></h2>
	<?php
	foreach ($jobs as $job) {
		echo ($this->element('job/job_display',
				     array('job' => $job)));
                
        ?>
        <div class="publish">
        <?php
            if ($job['Job']['published']) {
               echo 'This job has been published. ' . $this->Html->link(__('Un-publish this job', true), array('action' => 'unpublish', $job['Job']['id'])); 
            }
            else {
               echo 'This job has not been published. ' . $this->Html->link(__('Publish this job', true), array('action' => 'publish', $job['Job']['id'])); 
            }
        ?>
        </div>
        <?php
	}
	?>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Job', true), array('action' => 'add')); ?></li>
	</ul>
</div>