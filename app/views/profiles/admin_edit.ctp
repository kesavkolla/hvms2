<?php echo $html->script('profile', array('inline' => false)); ?>
<?php $userType = $session->read('Auth.User.type'); ?>

    <div class="sub-header clearfix">
        <h2><?php __('Admin Profile');?></h2>
    </div>


<div class="profiles form">
<?php echo $this->Form->create('Profile', array('id' => 'ProfileAddForm',
												'enctype' => 'multipart/form-data',
												
												)
								);?>
	<?php
		echo $this->Form->input('firstname', array('label' => 'First Name'));
		echo $this->Form->input('middleinitial', array('label' => 'Middle Initial'));
		echo $this->Form->input('lastname', array('label' => 'Last Name'));
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		
		echo '<div class="input text">';
		echo $this->Form->label('state');
		echo $this->Form->select('state', $this->Inputs->getStatesList(), null, array('label' => 'State'));
		echo '</div>';
		
		echo $this->Form->input('zip');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		
	
		echo $this->Form->input('title');
		echo $this->Form->input('tagline', array('after' => '<span class="hint">Briefly state your strengths</span>'));
		echo $this->Form->input('blurb');
		
		echo $this->Form->input('currentcompany', array('label' => 'Currently Working at', 'id' => 'current-company'));
	
		echo ($this->element('select_with_other',
							 array('label' => 'Role',
									'options' => $this->Inputs->getJobRoles(),
									'fieldName' => 'role',
									'multiple' => true,
									'size' => 7,
									'afterText' => 'You selected "Other", please elaborate',
								   )));
		echo ($this->element('select_with_other',
							 array('label' => 'Start Availability',
								   'options' => $this->Inputs->getCandidateNotice(),
									'afterText' => 'You selected "Other", please elaborate',
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

<?php
		echo '<div class="input text">';
		echo $this->Form->Input('published',
								array(
									'options' => $this->Inputs->getPublishedStatuses(),
									'type' => 'select',
									'showEmpty' => false,
								)
								 );
		echo '</div>';
?>

<?php
		echo '<div class="input text">';
		echo $this->Form->Input('status',
								array(
									'options' => $this->Inputs->getAdminStatuses(),
									'type' => 'select',
									'showEmpty' => false,
								)
								 );
		echo '</div>';
?>

<?php
		echo $this->Form->Input('trusted');
?>

	<div class="input">
		<label>Skills</label>
		<div class="skillbox">
			<?php echo $this->element('skills', array('data' => $skills, 'selectedSkills' => $selectedSkills)) ?>
		</div>
	</div>



<?php echo $this->Form->end(__('Submit', true));?>
</div>

<div class="profile-view">
	<h4 id="profile-view-header" style="display:none">Profile</h4>
	<div id="profile-preview"></div>
</div>
