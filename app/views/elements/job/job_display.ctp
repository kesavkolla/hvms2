<?php $curJob = $job['Job'] ;?>
<div class="job">
		<div class="title"><?php echo $curJob['title']; ?></div>
		<div class="description">
			<?php echo $curJob['description']; ?>
		</div>
		<div class="details">
			<dl>
				<?php //if (isset($curJob['jobid'])) { ?>
				<dt>Job Id</dt>
				<dd>
					<?php echo $curJob['jobid']; ?>
				</dd>
				?>
				
				<?php //if (isset($curJob['startdate'])) { ?>}
				<dt>Timeframe</dt>
				<dd>
					Start: 
					<?php echo $curJob['startdate']; ?>
					<?php //if (isset($curJob['startdate'])) { ?>}
					
					<?php echo $curJob['enddate']; ?>
					
					
					, at
					<?php echo $curJob['location']; ?>
				</dd>


			<dd><?php echo $curJob['location']; ?></dd>
			<dd><?php echo $curJob['jobtype']; ?></dd>
			<dd><?php echo $curJob['schedule']; ?></dd>
			<dd><?php echo $curJob['comments']; ?></dd>
			<dd><?php echo $curJob['ratemin']; ?></dd>
			<dd><?php echo $curJob['ratemax']; ?></dd>
			<dd><?php echo $curJob['expensespaid']; ?></dd>
			<dd><?php echo $curJob['role']; ?></dd>
			<dd><?php echo $curJob['openings']; ?></dd>
			<dd><?php echo $curJob['status']; ?></dd>
			<dd><?php echo $curJob['published']; ?></dd>
			<div class="skills">
			<?php
                            foreach ($job['Version'] as $skillInfo) {
                                $skill = '';
                                $vendorName = $skillInfo['Module']['Vendor']['vendorname'];
                                $moduleName = $skillInfo['Module']['modulename'];
                                $versionName = $skillInfo['versionname'];
				$skill = "$vendorName $moduleName $versionName";
				echo "<div class=\"skill\">{$skill} </div>";
			    }
			?>
			</div>
		</div>