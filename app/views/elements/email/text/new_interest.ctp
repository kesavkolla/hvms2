User <?php echo $userID ?> interested in <?php echo $interestType ?>.
<?php echo $this->Html->link($interestText, array('admin' => true,
															  'controller' => 'interests',
															  'action' => 'index',
															   null,
															  '?' => $interestQueryString)); ?>
