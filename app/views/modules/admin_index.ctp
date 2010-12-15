<div class="modules index">
	<h2><?php __('Modules');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('vendor_id');?></th>
			<th><?php echo $this->Paginator->sort('modulename');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($modules as $module):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $module['Module']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($module['Vendor']['vendorname'], array('controller' => 'vendors', 'action' => 'view', $module['Vendor']['id'])); ?>
		</td>
		<td><?php echo $module['Module']['modulename']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $module['Module']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $module['Module']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $module['Module']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $module['Module']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Module', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions', true), array('controller' => 'versions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version', true), array('controller' => 'versions', 'action' => 'add')); ?> </li>
	</ul>
</div>