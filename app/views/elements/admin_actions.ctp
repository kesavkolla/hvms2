	<ul class="clearfix">
		<h3><?php __('Admin Actions'); ?></h3>

		<li><?php echo $this->Html->link(__('Jobs Admin', true), array('admin' => true, 'controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Profiles Admin', true), array('admin' => true, 'controller' => 'profiles', 'action' => 'index')); ?> </li>

		<li><?php echo $this->Html->link(__('Hospital Admin', true), array('admin' => true, 'controller' => 'hospitals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Interests Admin', true), array('admin' => true, 'controller' => 'interests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Vendors Admin', true), array('admin' => true, 'controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Modules Admin', true), array('admin' => true, 'controller' => 'modules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Versions Admin', true), array('admin' => true, 'controller' => 'versions', 'action' => 'index')); ?> </li>
	</ul>
	