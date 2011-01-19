<div class="modules form">
<?php echo $this->Form->create('Module');?>
	<fieldset>
 		<legend><?php __('Admin Add Module'); ?></legend>
	<?php
		echo $this->Form->input('vendor_id');
		echo $this->Form->input('modulename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
