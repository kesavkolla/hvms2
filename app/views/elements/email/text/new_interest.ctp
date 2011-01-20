User <?php echo $userID ?> interested in <?php $interestType ?>.
<?php echo $this->Html->link($interestText, array('admin' => true,
															  'controller' => 'interests',
															  'action' => 'index',
															   null,
															  '?' => $interestQueryString)); ?>