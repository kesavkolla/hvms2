<?php echo $html->script('profile', array('inline' => false)); ?>

<div class="profiles form">
<?php echo $this->Form->create('Profile', array('id' => 'ProfileAddForm',
												'enctype' => 'multipart/form-data',
												'url' => 'edit',
												)
								);?>
	<?php
		echo $this->Form->input('firstname', array('label' => 'First Name'));
		echo $this->Form->input('middleinitial', array('label' => 'Middle Initial'));
		echo $this->Form->input('lastname', array('label' => 'Last Name'));
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('title');
		echo $this->Form->input('currentcompany', array('label' => 'Current Company'));
		echo ($this->element('select_with_other',
							 array('label' => 'Role',
								   'options' => $this->Inputs->getJobRoles(),
								   'fieldName' => 'role')));
		echo ($this->element('select_with_other',
							 array('label' => 'Start Availability',
								   'options' => $this->Inputs->getCandidateNotice(),
								   'fieldName' => 'startavailability')));		
		echo $this->Form->input('relocate', array('label' => 'I can relocate'));
		
		if (isset($this->data['Profile']['resume_name'])) {
				$resumeLink =  '<span class="downloadlink">' .
						       $html->link($this->data['Profile']['resume_name'], FILES_URL . $this->data['Profile']['resume_name']) .
							   '</span>';
				$resumeLabel = 'Change Resume';
		}
		else {
				$resumeLink = '';
				$resumeLabel = 'Upload Resume';
		}
		echo '<div class="input file">';
		echo "<label for=\"ProfileResumeUpload\">$resumeLabel</label>";
		echo $resumeLink;
		echo $this->Form->file('resume_upload');
		echo '</div>';
	?>
		
		<div class="input">
			<label>My Skills</label>
			<div class="skillbox">
				<?php echo $this->element('skills', array('data' => $skills, 'selectedSkills' => $selectedSkills)) ?>
			</div>
		</div>

<?php echo $this->Form->end(__('Submit', true));?>
</div>
