<?php $curProfile = $profile['Profile']; ?>
<?php $userType = $this->Session->read('Auth.User.type'); ?>

<div class="profile clearfix  <?php echo $userFlagged ? 'flagged' : ''?>" id="<?php echo $curProfile['id']?>">
	<?php
		if (isset($curProfile['title'])) {
			echo '<div class="title">' . $curProfile['title'] . '</div>';
		}
		
		if (isset($curProfile['city']) || isset($curProfile['state'])) {
			echo '<div class="location">(';				
			echo isset($curProfile['city']) ? $curProfile['city'] : '';
			echo isset($curProfile['state']) ? ', ' . $curProfile['state'] : '';
			echo ')</div>';
		}

		if ($userType == 'cand') {
			if (isset($curProfile['tagline'])) {
				echo '<div class="tagline">' . $curProfile['tagline'] . '</div>';
			}		
		}
		else {
			if (isset($curProfile['blurb'])) {
				echo '<div class="tagline">' . $curProfile['blurb'] . '</div>';
			}				
		}
		
		if (isset($curProfile['startavailability'])) {
			echo '<div class="startavailability"><h5>Availability:</h5>' .
				                                 $this->Inputs->formatReplace($curProfile['startavailability']) .
												 '.</div>';
		}

		if (isset($curProfile['relocate'])) {
			echo '<div class="relocate"> I am willing to relocate. </div>';
		}
	
	?>

	<div class="roles-skills clearfix">
		<h5>Experience:</h5>
		<?php
		if (isset($curProfile['role'])) {
			echo '<div class="role">' . $this->Inputs->formatReplace($curProfile['role']) . '</div>';
		}
		?>
		<div class="skills">
		<ul>
		<?php
			foreach ($profile['Module'] as $skillInfo) {
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
	<?php
        echo $this->element('interest', array('userFlagged' => $userFlagged,
                                              'interestId' => $curProfile['id']));
    ?>
</div>