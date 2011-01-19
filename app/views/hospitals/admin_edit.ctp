<div class="hospitals form">
<?php echo $this->Form->create('Hospital');?>
	<fieldset>
 		<legend><?php __('Admin Edit Hospital'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('description');
		echo $this->Form->input('domainsallowed');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hospitals', true), array('action' => 'index'));?></li>
	</ul>
</div>