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
		<h5>Sneak Peek - Openings and Candidates</h5>
	<?php
		foreach ($trustedDisplay as $trustedShow) {
			if (isset($trustedShow['Profile'])) {
				$prefix = 'Available to hire: ';
				$title = $trustedShow['Profile']['title'];
			}
			else if (isset($trustedShow['Job'])){
				$prefix = 'Job opening: ';
				$title = $trustedShow['Job']['title'];
			}
			echo '<div class="teaser-item">' .
			     "<span class=\"teaser-heading\">$prefix</span>" .
				 $title .
				 '</div>';
		
		}
	?>
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
