<div id="footer">
    
<?php
	$footerLinks = array();
	$footerLinks['Privacy'] = array ('controller' => 'pages', 'action' => 'privacy', 'admin' => false);
	$footerLinks['FAQ'] = array ('controller' => 'pages', 'action' => 'faq', 'admin' => false);
	$footerLinks['Terms of Use'] = array ('controller' => 'pages', 'action' => 'terms', 'admin' => false);
	echo '<ul id="footer-links" class="clearfix">';
	$firstLink = true;
	foreach ($footerLinks as $linkText => $url) {
		$class = '';
		if ($firstLink)
		{
			$class = 'class="first"';
			$firstLink = false;
		}
		echo "<li {$class}>" . $html->link($linkText, $url) . '</li>';
    	}
	echo '</ul>';
?>
</div>
