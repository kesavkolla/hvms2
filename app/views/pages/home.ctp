<div id="home">
	
	<div id="value-prop">
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
		HVMS Value Prop here
	</div>
	
	<div id="teaser">
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
		Teaser content here
	</div>

<?php if (!$session->read('Auth.User.username')) {	 ?>
	<div id="get-user">
		<h3>Join Us</h3>
		It takes only a minute.
		HVMS is the largest online network of hospital IT professionals and jobs. 
		<?php echo $this->Html->link('Join Now', array('controller' => 'users', 'action' => 'register'), array('class' => 'teaser-button')); ?> 
	</div>
<?php } else {
		if ($session->read('Auth.User.type') == 'cand') {
				$lookingFor = 'jobs';
                $text = 'Find Jobs';
				$link = array('controller' => 'jobs', 'action' => 'search');
        }
        else if ($session->read('Auth.User.type') == 'hosp') {
				$lookingFor = 'candidates';
                $text = 'Find Employees';
				$link = array('controller' => 'profiles', 'action' => 'search');
        }
?>

<?php
	if (isset($lookingFor)) {
?>
		<div id="get-user">
			Welcome back!
			We have new <?php echo $lookingFor ?> for you to check out. 
			<?php echo $this->Html->link($text, $link, array('class' => 'teaser-button')); ?> 
		</div>
<?php
	}
?>
<?php } ?>
</div>
