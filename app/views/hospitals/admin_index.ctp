<div class="hospitals index">
	<h2><?php __('Hospitals');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('address1');?></th>
			<th><?php echo $this->Paginator->sort('address2');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('domainsallowed');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($hospitals as $hospital):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $hospital['Hospital']['id']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['name']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['address1']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['address2']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['city']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['state']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['zip']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['phone']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['fax']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['description']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['domainsallowed']; ?>&nbsp;</td>
		<td><?php echo $hospital['Hospital']['url']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $hospital['Hospital']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Hospital', true), array('action' => 'add')); ?></li>
	</ul>
</div>