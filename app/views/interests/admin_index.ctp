<div class="interests index">
	<h2><?php __('Interests');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'user_id'; ?></th>
			<th><?php echo 'interest_type'; ?></th>
			<th><?php echo 'Details'; ?></th>
			<th><?php echo 'Comments'; ?></th>
			<th><?php echo 'Status'; ?></th>

			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($interests as $interest):
	?>
	<tr>
		<td><?php echo $interest['Interest']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interest['User']['id'], array('controller' => 'users', 'action' => 'view', $interest['User']['id'])); ?>
		</td>
		<td><?php echo $interest['Interest']['interest_type']; ?>&nbsp;</td>
		<td>
			<?php
				if ($interest['Interest']['interest_type'] == 'cand') {

					$interest['Module'] = $interest['Profile']['Module'];
					unset($interest['Profile']['Module']);
					echo ($this->element('profile/profile_display',
							 array('profile' => $interest)));
					echo $this->Html->link('Edit', array('controller' => 'profiles', 'action' => 'edit', $interest['Profile']['User']['id']));
				}
				else if ($interest['Interest']['interest_type'] == 'job') {
					$interest['Module'] = $interest['Job']['Module'];
					unset($interest['Job']['Module']);
					
					echo ($this->element('job/job_display',
							 array('job' => $interest)));
				}
				
		?>
		</td>
		<td><?php echo $interest['Interest']['Comment']; ?>&nbsp;</td>
		<td><?php echo $interest['Interest']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $interest['Interest']['id'])); ?>
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
