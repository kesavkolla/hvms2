<?php echo $html->script('hvms', array('inline' => false)); ?>

<div id="left-nav">
	<?php echo $this->Form->create(null, array('id' => 'ProfileSearchForm'));?>
	<h3>Narrow Your Search</h3>
	<div class="input interested">
		<?php echo $this->Form->checkbox('interested'); ?>
		Only show employees I'm interested in
	</div>
	
	<?php
	echo $this->Form->input('role', array(
										 'type' => 'select',
										 'multiple' => true,
										 'size' => 4,
										 'label' => 'Role',
										 'class' => 'multi-select',
										 'empty' => '---',
										 'options' => $this->Inputs->getJobRoles()));

	?>
	
	<div class="input">
		<label>Skills Required</label>
		<div class="skillbox">
		<?php echo $this->element('skills', array('data' => $skills, 'selectedSkills' => $selectedSkills)) ?>
		</div>
	</div>
	
	<?php echo $this->Form->end(__('Search', true));?>
</div>

<div id="right-content">
	<h3><?php echo $searchHeading ?></h3>
	<?php
	foreach ($profiles as $profile) {
		$userFlagged = in_array($profile['Profile']['id'], $userInterestIds);
		echo ($this->element('profile/profile_display_public',
				     array('profile' => $profile,
						   'userFlagged' => $userFlagged)));
	}
	?>
	<div class="pager">
		<!-- Shows the page numbers -->
		<?php echo $this->Paginator->numbers(); ?>
		<!-- Shows the next and previous links -->
		<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
		<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?> 
		<!-- prints X of Y, where X is current page and Y is number of pages -->
		<?php echo $this->Paginator->counter(); ?>
	</div>
</div>