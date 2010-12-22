<div class="profiles index">
	<h2><?php __('Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('firstname');?></th>
			<th><?php echo $this->Paginator->sort('middleinitial');?></th>
			<th><?php echo $this->Paginator->sort('lastname');?></th>
			<th><?php echo $this->Paginator->sort('address1');?></th>
			<th><?php echo $this->Paginator->sort('address2');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('zip');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('fax');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('currentcompany');?></th>
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('notice');?></th>
			<th><?php echo $this->Paginator->sort('startavailability');?></th>
			<th><?php echo $this->Paginator->sort('relocate');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('blurb');?></th>
			<th><?php echo $this->Paginator->sort('published');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($profiles as $profile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $profile['Profile']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
		</td>
		<td><?php echo $profile['Profile']['firstname']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['middleinitial']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['lastname']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['address1']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['address2']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['city']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['state']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['zip']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['phone']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['fax']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['title']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['currentcompany']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['role']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['startavailability']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['relocate']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['comment']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['blurb']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['hospital_id']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['published']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['Profile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Profile', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>