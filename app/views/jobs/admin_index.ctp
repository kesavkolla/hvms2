<div class="jobs index">
	<h2><?php __('Jobs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'user_id'; ?></th>
			<th><?php echo 'title'; ?></th>
			<th><?php echo 'jobid'; ?></th>
			<th><?php echo 'startdate'; ?></th>
			<th><?php echo 'enddate'; ?></th>
			<th><?php echo 'description'; ?></th>
			<th><?php echo 'location'; ?></th>
			<th><?php echo 'jobtype'; ?></th>
			<th><?php echo 'schedule'; ?></th>
			<th><?php echo 'comments'; ?></th>
			<th><?php echo 'ratemin'; ?></th>
			<th><?php echo 'ratemax'; ?></th>
			<th><?php echo 'expensespaid'; ?></th>
			<th><?php echo 'role'; ?></th>
			<th><?php echo 'openings'; ?></th>
			<th><?php echo 'status'; ?></th>
			<th><?php echo 'published'; ?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobs as $job):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $job['Job']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($job['User']['id'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
		</td>
		<td><?php echo $job['Job']['title']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['jobid']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['startdate']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['enddate']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['description']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['location']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['jobtype']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['schedule']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['comments']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['ratemin']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['ratemax']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['expensespaid'] ? 'Yes' : '-' ; ?>&nbsp;</td>
		<td><?php echo $this->Inputs->formatReplace($job['Job']['role']); ?>&nbsp;</td>
		<td><?php echo $job['Job']['openings']; ?>&nbsp;</td>
		<td><?php echo $job['Job']['status'] ? 'Active' : 'Inactive'; ?>&nbsp;</td>
		<td><?php echo $job['Job']['published'] ? 'Yes' : 'No'; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $job['Job']['id'])); ?>
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
