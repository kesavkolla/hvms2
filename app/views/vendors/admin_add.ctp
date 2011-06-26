<div class="vendors form">
<?php echo $this->Form->create('Vendor');?>
	<fieldset>
 		<legend><?php __('Admin Add Vendor'); ?></legend>
	<?php
		echo $this->Form->input('vendorname');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>