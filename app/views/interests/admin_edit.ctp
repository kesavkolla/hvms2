<div class="interests form">
<?php echo $this->Form->create('Interest');?>
	<fieldset>
 		<legend><?php __('Admin Edit Interest'); ?></legend>
		<div class="input text">
			<label>Interested User</label>
			<span><?php
			echo $this->data['User']['username'] . ' ( id : ' ;
			echo $this->Html->link($this->data['User']['id'],
											   array ('controller' => 'users',
													  'action' => 'view',
													  $this->data['User']['id']));
			echo ')';
			?></span>
		</div>

	<?php
		echo '<div class="input text">';
		echo $this->Form->Input('status',
								array(
									'options' => $this->Inputs->getAdminStatuses(),
									'type' => 'select',
									'showEmpty' => false,
									'after' => '<span class="hint">active = hvms is following up on this </span>'
								)
								 );
		echo '</div>';
		echo $this->Form->input('comment');
	?>
	</fieldset>
	
	

<?php echo $this->Form->end(__('Submit', true));?>
</div>
	
<div >
	<?php
			if ($this->data['Interest']['interest_type'] == 'cand') {

				$this->data['Module'] = $this->data['Profile']['Module'];
				unset($this->data['Profile']['Module']);
				echo ($this->element('profile/profile_display',
						 array('profile' => $this->data)));
				echo $this->Html->link('Edit', array('controller' => 'profiles', 'action' => 'edit', $this->data['Profile']['User']['id']));
			}
			else if ($this->data['Interest']['interest_type'] == 'job') {
				$this->data['Module'] = $this->data['Job']['Module'];
				unset($this->data['Job']['Module']);
				
				echo ($this->element('job/job_display',
						 array('job' => $this->data)));
			}
			
	?>
</div>
