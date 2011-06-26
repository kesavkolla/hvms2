<div class="vendors view">
<h2><?php  __('Vendor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vendor['Vendor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vendorname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vendor['Vendor']['vendorname']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendor', true), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Vendor', true), array('action' => 'delete', $vendor['Vendor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('controller' => 'modules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Modules');?></h3>
	<?php if (!empty($vendor['Module'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vendor Id'); ?></th>
		<th><?php __('Modulename'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['Module'] as $module):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $module['id'];?></td>
			<td><?php echo $module['vendor_id'];?></td>
			<td><?php echo $module['modulename'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'modules', 'action' => 'view', $module['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'modules', 'action' => 'edit', $module['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'modules', 'action' => 'delete', $module['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $module['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Module', true), array('controller' => 'modules', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
