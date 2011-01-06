<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<title><?php echo $title_for_layout?></title>

<?php
    echo $html->script('jq-min');
    echo $html->script('jquery.validate.min');
    echo $html->script('jquery-ui-1.8.6.custom.min');

?> 
<?php
   echo $html->css('reset');

 //  echo $html->css('cake.generic');
   echo $html->css('main');
?> 
<?php echo $scripts_for_layout ?>
</head>
<body>
<div id="content">
<!-- Here's where I want my views to be displayed -->
<?php
echo $this->element('header'); 
?>
<div id="container">
<?php
echo $this->Session->flash();
echo $this->Session->flash('auth');
echo $content_for_layout;
?>
</div>
</div>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
