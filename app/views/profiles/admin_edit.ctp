<div class="profiles form">
<?php echo $this->Form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Admin Edit Profile'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middleinitial');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('title');
		echo $this->Form->input('currentcompany');
		echo $this->Form->input('role');
		echo $this->Form->input('notice');
		echo $this->Form->input('startavailability');
		echo $this->Form->input('relocate');
		echo $this->Form->input('comment');
		echo $this->Form->input('blurb');
		echo $this->Form->input('resume');
		echo $this->Form->input('published');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Profile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Profile.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>