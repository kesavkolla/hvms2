<div class="users view">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'username'; ?></th>
			<th><?php echo 'password'; ?></th>
			<th><?php echo 'type'; ?></th>
			<th><?php echo 'status'; ?></th>
			<th><?php echo 'created'; ?></th>
			<th><?php echo 'modified'; ?></th>
	</tr>

	<tr>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['type']; ?>&nbsp;</td>
		<td><?php echo $user['User']['status']; ?>&nbsp;</td>
		<td><?php echo $user['User']['created']; ?>&nbsp;</td>
		<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
	</tr>
	</table>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('View User Jobs', true), array('controller' => 'jobs', 'action' => 'viewuser',  $user['User']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('View Profile', true), array('controller' => 'profiles', 'action' => 'edit', $user['User']['id'])); ?> </li>
	</ul>
</div>