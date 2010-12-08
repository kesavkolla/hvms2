<div class="hospitals view">
<h2><?php  __('Hospital');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['address1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['address2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['zip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Domainsallowed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['domainsallowed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $hospital['Hospital']['url']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hospital', true), array('action' => 'edit', $hospital['Hospital']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Hospital', true), array('action' => 'delete', $hospital['Hospital']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $hospital['Hospital']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hospitals', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hospital', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Profiles');?></h3>
	<?php if (!empty($hospital['Profile'])):?>
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
		<th><?php __('Email'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Currentcompany'); ?></th>
		<th><?php __('Role'); ?></th>
		<th><?php __('Notice'); ?></th>
		<th><?php __('Startavailability'); ?></th>
		<th><?php __('Relocate'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Blurb'); ?></th>
		<th><?php __('Hospital Id'); ?></th>
		<th><?php __('Resume'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($hospital['Profile'] as $profile):
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
			<td><?php echo $profile['email'];?></td>
			<td><?php echo $profile['title'];?></td>
			<td><?php echo $profile['currentcompany'];?></td>
			<td><?php echo $profile['role'];?></td>
			<td><?php echo $profile['notice'];?></td>
			<td><?php echo $profile['startavailability'];?></td>
			<td><?php echo $profile['relocate'];?></td>
			<td><?php echo $profile['comment'];?></td>
			<td><?php echo $profile['blurb'];?></td>
			<td><?php echo $profile['hospital_id'];?></td>
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
