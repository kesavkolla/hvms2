<?php $userType = $this->Session->read('Auth.User.type'); ?>

<?php
		$curJob = $job['Job'] ;
		$statusStyle = 'active';
		if (!$curJob['published'] || $curJob['status'] != 1) {
				$statusStyle = 'closed';
		}

?>
<div class="job clearfix <?php echo $statusStyle ?> <?php echo $userFlagged ? 'flagged' : ''?>" id="<?php echo $curJob['id']?>">
		<?php
		if ($curJob['trusted']) {
			echo "<img class=\"posting-badge\" src=\"{$this->webroot}img/verified_badge.png\" alt=\"Recommended by HealthVMS\" title=\"Recommended by HealthVMS\" />";
		}
		?>		
		
		<div class="title"><?php echo $curJob['title']; ?></div>
        <?php
		if ($curJob['location'] ||  $curJob['state']) {
			echo '<div class="location">(';				
			echo $curJob['location'] ? $curJob['location'] : '';
			echo $curJob['location'] && $curJob['state'] ? ', ' : '';
			echo $curJob['state'] ? $curJob['state'] : '';
			echo ')</div>';
		}
        ?>
        
		<div class="description">
			<?php echo $curJob['description']; ?>
		</div>
		<div class="details">
            <h5 class="list">Employment Details:</h5>
            <?php
                if (isset($curJob['startdate'])) { 
                    echo '<div class="timeframe">';
                    echo $time->format($curJob['startdate']); 
                
                    if (isset($curJob['enddate'])) {
                        echo ' to ' . $time->format($curJob['enddate']); 
                    }
                    echo '</div>';
                }
                
                if (isset($curJob['schedule'])) {
                    echo '<div class="schedule">';
                    echo $this->Inputs->formatReplace($curJob['schedule']); 
                    if (isset($curJob['expensespaid']) && $curJob['expensespaid']) { 
                        echo ' (expenses paid)';
                    }
                    echo '</div>';
                }

                if (isset($curJob['jobtype'])) {
                    echo '<div class="job-type">';
                    echo $curJob['jobtype'];
                    echo '</div>';
                }
                
            ?>
            
            <div class="roles-skills clearfix">
                <h5 class="list">Experience Required:</h5>
                <?php
                if (isset($curJob['role'])) {
                    echo '<div class="role">' . $this->Inputs->formatReplace($curJob['role']) . '</div>';
                }
                ?>
                <div class="skills">
                <ul>
                <?php
                    foreach ($job['Module'] as $skillInfo) {
                        $skill = '';
                        $vendorName = $skillInfo['Vendor']['vendorname'];
                        $moduleName = $skillInfo['modulename'];
                        $skill = "$vendorName $moduleName";
                        echo "<li class=\"skill\">{$skill} </li>";
                    }
                    ?>
                </ul>
                </div>						
            </div>
		</div>
	    
    <?php
    if ($userType == 'admin') {
        echo $this->element('job/job_admin_display', array('job' => $job));
    }
    else {
        echo $this->element('interest', array('userFlagged' => $userFlagged,
                                              'interestId' => $curJob['id']));
	}
    ?>
</div>
