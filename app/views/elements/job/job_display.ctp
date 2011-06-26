<?php $userType = $this->Session->read('Auth.User.type'); ?>

<?php $curJob = $job['Job'] ;?>
<div class="job">
    <div class="title"><?php echo $curJob['title']; ?></div>
    <div class="description">
        <?php echo $curJob['description']; ?>
    </div>
    <div class="details">
                <dl class="clearfix">
                    <?php if (isset($curJob['jobid'])) { ?>
                    <dt class="job-id">Req</dt>
                    <dd class="job-id">
                            <?php echo $curJob['jobid']; ?>
                    </dd>
                    <?php } ?>
                    
                    <?php if (isset($curJob['startdate'])) { ?>
                    <dt class="timeframe">Timeframe</dt>
                    <dd class="timeframe">
                        <?php echo $time->format($curJob['startdate']); ?>
                        <?php
                            if (isset($curJob['enddate'])) {
                                echo ' to ' . $time->format($curJob['enddate']); 
                            } ?>					
                    </dd>
                    <?php } ?>
                    
                    <?php if ($curJob['location'] || $curJob['state']) { ?>
                    <dt class="location">Location</dt>
                    <dd class="location">
                    <?php
                        echo $curJob['location'] ? $curJob['location'] : '';
                        echo $curJob['location'] && $curJob['state'] ? ', ' : '';
                        echo $curJob['state'] ? $curJob['state'] : '';
                    ?>
                    </dd>
                    <?php } ?>


                    <?php if (isset($curJob['schedule'])) { ?>
                    <dt class="schedule">Schedule</dt>
                    <dd class="schedule">
                            <?php echo $this->Inputs->formatReplace($curJob['schedule']); ?>
                    </dd>
                    <?php } ?>


                    <?php if (isset($curJob['ratemin']) || isset($curJob['ratemax'])) { ?>
                    <dt class="rate">Hourly Rate</dt>
                    <dd class="rate">
                        <?php
                            echo isset($curJob['ratemin']) ?
                                $number->currency($curJob['ratemin'],'USD') .  ' to ':
                                ' less than ';
                            
                            echo isset($curJob['ratemax']) ?
                                $number->currency($curJob['ratemax'],'USD') :
                                'unspecified maximum';
                    }
                    if (isset($curJob['expensespaid']) && $curJob['expensespaid']) { 
                        echo ' (expenses paid)';
                    }
                    ?>
                    </dd>

                    <?php if (isset($curJob['role'])) { ?>
                    <dt class="role">Role</dt>
                    <dd>
                            <?php echo $this->Inputs->formatReplace($curJob['role']); ?>
                    </dd>
                    <?php } ?>

        <dt class="skills">Skills</dt>
                    <dd class="skills">
        <?php
                        foreach ($job['Module'] as $skillInfo) {
                            $skill = '';
                            $vendorName = $skillInfo['Vendor']['vendorname'];
                            $moduleName = $skillInfo['modulename'];
                            $skill = "$vendorName $moduleName";
                            echo "<div class=\"skill\">{$skill} </div>";
                        }
        ?>
                    </dd>
        </dl>
    </div>
    
    <div class="publish">
    <?php
        if ($job['Job']['published']) {
           echo 'This job has been published. ' . $this->Html->link(__('Un-publish it.', true), array('action' => 'unpublish', $job['Job']['id'])); 
        }
        else {
           echo 'This job has not been published. ' . $this->Html->link(__('Publish it.', true), array('action' => 'publish', $job['Job']['id'])); 
        }
    ?>
    </div>
    
    <?php
    if ($userType == 'admin') {
        echo $this->element('job/job_admin_display', array('job' => $job));
    }
    ?>
    
    <div class="edit">
        <?php
            echo $this->Html->link(__('Edit this job', true), array('controller' => 'jobs', 'action' => 'edit', $job['Job']['id']));
        ?>
    </div>
    
    <div class="view-job">
	<a href="javascript:void(0)" onclick="hvms.viewJob(<?php echo  $job['Job']['id'] ?>); return false;">See how this job will appear to candidates</a>
    </div>
</div>
