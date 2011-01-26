<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<title><?php echo $title_for_layout?></title>

<?php
    echo $html->script('jq-min');
    echo $html->script('jquery.validate.min');
    echo $html->script('jquery-ui-1.8.6.custom.min');
    echo $html->script('common');
?>
<?php
   echo $html->css('reset');
   echo $html->css('main');
?>

<!--[if lte IE 7]> 
<?php
   echo $html->css('ie');
?>
<![endif]-->

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

if ($session->read('Auth.User.type') == 'admin')  {
    echo $this->element('admin_actions');	
}
?>
</div>
</div>
	<?php echo $this->element('sql_dump'); ?>

</body>
</html>
