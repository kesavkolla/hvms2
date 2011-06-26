<?php
//pr ($profiles); exit;
?>
<div class="profiles index">
	<h2><?php __('Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'user_id'; ?></th>
			<th><?php echo 'firstname'; ?></th>
			<th><?php echo 'middleinitial'; ?></th>
			<th><?php echo 'lastname'; ?></th>
			<th><?php echo 'address1'; ?></th>
			<th><?php echo 'address2'; ?></th>
			<th><?php echo 'city'; ?></th>
			<th><?php echo 'state'; ?></th>
			<th><?php echo 'zip'; ?></th>
			<th><?php echo 'phone'; ?></th>
			<th><?php echo 'fax'; ?></th>
			<th><?php echo 'title'; ?></th>
			<th><?php echo 'currentcompany'; ?></th>
			<th><?php echo 'Roles';?></th>
			<th><?php echo 'tagline'; ?></th>

			<th><?php echo 'startavailability'; ?></th>
			<th><?php echo 'relocate'; ?></th>
			<th><?php echo 'comment'; ?></th>
			<th><?php echo 'blurb'; ?></th>
			<th><?php echo 'resume_name'; ?></th>
			<th><?php echo 'published'; ?></th>
			<th><?php echo 'status'; ?></th>
			<th><?php echo 'trusted'; ?></th>

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
		<td><?php echo $this->Inputs->formatRoles($profile['ProfileRole']) ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['tagline']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['startavailability']; ?>&nbsp;</td>

		<td><?php echo $profile['Profile']['relocate'] ? 'yes' : 'no'; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['comment']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['blurb']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['resume_name']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['published'] ? 'published' : 'not published'; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['status'] ? 'active' : 'inactive'; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['trusted'] ? 'trusted' : '-'; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $profile['Profile']['user_id'])); ?>
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
