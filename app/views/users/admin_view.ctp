<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php __('Related Profiles');?></h3>
	<?php if (!empty($user['Profile'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Firstname');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['firstname'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Middleinitial');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['middleinitial'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lastname');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['lastname'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['address1'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['address2'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['city'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['state'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['zip'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['phone'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['fax'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['email'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['title'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Currentcompany');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['currentcompany'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['role'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notice');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['notice'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Startavailability');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['startavailability'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relocate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['relocate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['comment'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Blurb');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['blurb'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hospital Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['hospital_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Resume');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['resume'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['published'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['status'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Profile', true), array('controller' => 'profiles', 'action' => 'edit', $user['Profile']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($user['Job'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Jobid'); ?></th>
		<th><?php __('Startdate'); ?></th>
		<th><?php __('Enddate'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Jobtype'); ?></th>
		<th><?php __('Schedule'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th><?php __('Ratemin'); ?></th>
		<th><?php __('Ratemax'); ?></th>
		<th><?php __('Expensespaid'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Openings'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Published'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Job'] as $job):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $job['id'];?></td>
			<td><?php echo $job['user_id'];?></td>
			<td><?php echo $job['title'];?></td>
			<td><?php echo $job['jobid'];?></td>
			<td><?php echo $job['startdate'];?></td>
			<td><?php echo $job['enddate'];?></td>
			<td><?php echo $job['description'];?></td>
			<td><?php echo $job['location'];?></td>
			<td><?php echo $job['jobtype'];?></td>
			<td><?php echo $job['schedule'];?></td>
			<td><?php echo $job['comments'];?></td>
			<td><?php echo $job['ratemin'];?></td>
			<td><?php echo $job['ratemax'];?></td>
			<td><?php echo $job['expensespaid'];?></td>
			<td><?php echo $job['role'];?></td>
			<td><?php echo $job['openings'];?></td>
			<td><?php echo $job['status'];?></td>
			<td><?php echo $job['published'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'jobs', 'action' => 'delete', $job['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
