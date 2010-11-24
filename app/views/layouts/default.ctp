<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<title><?php echo $title_for_layout?></title>
<link rel="stylesheet" type="text/css" href="my.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
   echo $html->script('jq-min');
   echo $html->script('jquery.validate.min');
?> 
<?php
   echo $html->css('reset');

   echo $html->css('cake.generic');
   echo $html->css('main');
?> 
<?php echo $scripts_for_layout ?>
</head>
<body>

<!-- Here's where I want my views to be displayed -->
<?php
echo $this->element('header'); 

echo $session->flash();
echo $session->flash('auth');
echo $content_for_layout;
?> 
</body>
</html>
