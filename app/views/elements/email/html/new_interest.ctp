User <?php echo $userID ?> is interested in a <?php echo $interestType ?>.
<?php echo $this->Html->link($interestText, array('admin' => true,
															  'controller' => 'interests',
															  'action' => 'index',
															   null,
															  '?' => $interestQueryString)); ?>
