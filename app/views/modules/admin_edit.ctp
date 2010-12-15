<div class="modules form">
<?php echo $this->Form->create('Module');?>
	<fieldset>
 		<legend><?php __('Admin Edit Module'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('modulename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Module.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Module.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions', true), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version', true), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>