<?php echo $html->script('job', array('inline' => false)); ?>

<div class="jobs index">
    <div class="sub-header clearfix">
        <h2><?php __('Jobs');?></h2>
        <div class="sub-menu">
            [<?php echo $this->Html->link(__('Add a Job', true), array('action' => 'add')); ?>]
        </div>
    </div>
	<?php
	foreach ($jobs as $job) {
		echo ($this->element('job/job_display',
				     array('job' => $job)));
                
        ?>

        <?php
	}
	?>

</div>
<div class="job-view">
        <h4 id="job-view-header" style="display:none">Job View</h4>
        <div id="job-preview"></div>
</div>
