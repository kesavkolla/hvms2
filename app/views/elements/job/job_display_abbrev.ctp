<?php $curJob = $job['Job'] ;?>
<div class="job <?php echo $userFlagged ? 'flagged' : ''?>" id="<?php echo $curJob['id']?>">
		<div class="title"><?php echo $curJob['title']; ?></div>
		<div class="description">
			<?php echo $curJob['description']; ?>
		</div>
		<div class="details">
            <dl class="clearfix">
                <dt> ID </dt> <dd><?php echo $curJob['id']?> <span style="color:red; font-style:italic">delete before release </span></dd>
                <?php if (isset($curJob['startdate'])) { ?>
                <dt class="timeframe">Details</dt>
                <dd class="timeframe">
                    <?php echo $time->format($curJob['startdate']); ?>
                    <?php
                        if (isset($curJob['enddate'])) {
                            echo ' to ' . $time->format($curJob['enddate']); 
                        } ?>					
                </dd>
                <?php } ?>
                
                <?php if (isset($curJob['location'])) { ?>
                <dt class="location">Location</dt>
                <dd class="location">
                        <?php echo $curJob['location']; ?>
                </dd>
                <?php } ?>


                <?php if (isset($curJob['schedule'])) { ?>
                <dt class="schedule">Schedule</dt>
                <dd class="schedule">
                    <?php
                        echo $curJob['schedule']; 
                        if (isset($curJob['expensespaid']) && $curJob['expensespaid']) { 
                            echo ' (expenses paid)';
                        }
                    ?>
                </dd>
                <?php } ?>

                <?php if (isset($curJob['role'])) { ?>
                <dt class="role">Role</dt>
                <dd>
                        <?php echo $curJob['role']; ?>
                </dd>
                <?php } ?>
                     
    			<dt class="skills">Skills</dt>
                <dd class="skills">
                    <ul>
    			<?php
                    foreach ($job['Version'] as $skillInfo) {
                        $skill = '';
                        $vendorName = $skillInfo['Module']['Vendor']['vendorname'];
                        $moduleName = $skillInfo['Module']['modulename'];
                        $versionName = $skillInfo['versionname'];
                        $skill = "$vendorName $moduleName $versionName";
                        echo "<li class=\"skill\">{$skill} </li>";
    			    }
    			?>
                    </ul>
                </dd>
			</dl>
		</div>
    <?php
        echo $this->element('interest', array('userFlagged' => $userFlagged,
                                              'interestId' => $curJob['id']));
    ?>
</div>
