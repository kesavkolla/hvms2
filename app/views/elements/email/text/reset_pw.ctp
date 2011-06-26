<?php $resetPwLink = $html->url('/users/auto_reset_pw/' . $resetLink, true); ?>


Dear <?php echo $username ?>,
<br/>
The new password you requested is: <?php echo $otp ?>. To reset your password, click
<br/>
<?php echo $html->link($resetPwLink, $resetPwLink); ?>
<br/> 
or copy and paste the following link in your browser:
<?php echo $resetPwLink ?>
<br/>
If you have not requested a new password, please ignore this email.