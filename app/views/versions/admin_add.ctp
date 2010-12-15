<div class="versions form">
<?php echo $this->Form->create('Version');?>
	<fieldset>
 		<legend><?php __('Admin Add Version'); ?></legend>
	<?php
		echo $this->Form->input('module_id');
		echo $this->Form->input('versionname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Versions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>

<?php for ($i = 1; $i < 92; $i++) {
	?>
	insert into versions(module_id, versionname)  values(<?php echo $i ?>, "Summer 09"); <br/>
insert into versions(module_id, versionname)  values(<?php echo $i ?>, "Spring 08"); <br/>
insert into versions(module_id, versionname)  values(<?php echo $i ?>, "Spring 07"); <br/>
insert into versions(module_id, versionname)  values(<?php echo $i ?>, "Other"); <br/>
<?php }  ?>