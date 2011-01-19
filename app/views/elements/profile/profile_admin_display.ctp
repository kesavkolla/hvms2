<div style="border: 1px solid #333; padding: 5px;">
	<?php $profileID = $profile['Profile']['id']; ?>

	<a href="#" onclick="$('#admin-<?php echo $profileID ?>').toggle(); return false;">Admin - Profile Dump</a>
	<div id="admin-<?php echo $profileID ?>" style="display: none">
	<?php
		foreach($profile['Profile'] as $label => $value) {
			echo "<strong>$label</strong>: $value <br/>";
		}
	?>
	<?php
	echo $this->Html->link('See interests in this profile', array('admin' => true,
															  'controller' => 'interests',
															  'action' => 'index',
															  null,
															  '?' => array('profile_id' => $profileID)));
	?>
	</div>

</div>