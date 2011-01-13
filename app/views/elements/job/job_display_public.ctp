<?php
		$curJob = $job['Job'] ;
		
		$statusStyle = 'active';
		if (!$curJob['published'] || $curJob['status'] != 1) {
				$statusStyle = 'closed';
		}
?>
<div class="job clearfix $statusStyle <?php echo $userFlagged ? 'flagged' : ''?>" id="<?php echo $curJob['id']?>">
		<div class="title"><?php echo $curJob['title']; ?></div>
        <?php
        if (isset($curJob['location'])) { 
            echo '<div class="location">(' . $curJob['location'] . ')   </div>';
        }
        ?>
        
		<div class="description">
			<?php echo $curJob['description']; ?>
		</div>
		<div class="details">
            <div>ID : <?php echo $curJob['id']?> <span style="color:red; font-style:italic">delete before release </span></div>
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
                    echo '<div class="role">' . $this->Inputs->formatReplace($curJob['role']) . ' role</div>';
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
        echo $this->element('interest', array('userFlagged' => $userFlagged,
                                              'interestId' => $curJob['id']));
    ?>
</div>
