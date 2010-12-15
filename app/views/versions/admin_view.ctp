<div class="versions view">
<h2><?php  __('Version');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $version['Version']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Module'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($version['Module']['modulename'], array('controller' => 'modules', 'action' => 'view', $version['Module']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Versionname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $version['Version']['versionname']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Version', true), array('action' => 'edit', $version['Version']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Version', true), array('action' => 'delete', $version['Version']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $version['Version']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Versions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Version', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modules', true), array('controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Module', true), array('controller' => 'modules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Profiles');?></h3>
	<?php if (!empty($version['Profile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Firstname'); ?></th>
		<th><?php __('Middleinitial'); ?></th>
		<th><?php __('Lastname'); ?></th>
		<th><?php __('Address1'); ?></th>
		<th><?php __('Address2'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Zip'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Currentcompany'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Startavailability'); ?></th>
		<th><?php __('Relocate'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Blurb'); ?></th>
		<th><?php __('Hospital Id'); ?></th>
		<th><?php __('Resume Name'); ?></th>
		<th><?php __('Resume'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($version['Profile'] as $profile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $profile['id'];?></td>
			<td><?php echo $profile['user_id'];?></td>
			<td><?php echo $profile['firstname'];?></td>
			<td><?php echo $profile['middleinitial'];?></td>
			<td><?php echo $profile['lastname'];?></td>
			<td><?php echo $profile['address1'];?></td>
			<td><?php echo $profile['address2'];?></td>
			<td><?php echo $profile['city'];?></td>
			<td><?php echo $profile['state'];?></td>
			<td><?php echo $profile['zip'];?></td>
			<td><?php echo $profile['phone'];?></td>
			<td><?php echo $profile['fax'];?></td>
			<td><?php echo $profile['title'];?></td>
			<td><?php echo $profile['currentcompany'];?></td>
			<td><?php echo $profile['role'];?></td>
			<td><?php echo $profile['startavailability'];?></td>
			<td><?php echo $profile['relocate'];?></td>
			<td><?php echo $profile['comment'];?></td>
			<td><?php echo $profile['blurb'];?></td>
			<td><?php echo $profile['hospital_id'];?></td>
			<td><?php echo $profile['resume_name'];?></td>
			<td><?php echo $profile['resume'];?></td>
			<td><?php echo $profile['published'];?></td>
			<td><?php echo $profile['status'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($version['Job'])):?>
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
		foreach ($version['Job'] as $job):
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
