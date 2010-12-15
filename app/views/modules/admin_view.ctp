<div class="modules view">
<h2><?php  __('Module');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vendor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($module['Vendor']['vendorname'], array('controller' => 'vendors', 'action' => 'view', $module['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modulename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $module['Module']['modulename']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Module', true), array('action' => 'edit', $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Module', true), array('action' => 'delete', $module['Module']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $module['Module']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions', true), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version', true), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Versions');?></h3>
	<?php if (!empty($module['Version'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Module Id'); ?></th>
		<th><?php __('Versionname'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($module['Version'] as $version):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $version['id'];?></td>
			<td><?php echo $version['module_id'];?></td>
			<td><?php echo $version['versionname'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'versions', 'action' => 'view', $version['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'versions', 'action' => 'edit', $version['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'versions', 'action' => 'delete', $version['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $version['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Version', true), array('controller' => 'versions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
