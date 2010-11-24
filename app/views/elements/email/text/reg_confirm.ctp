Dear <?php echo $username ?>,

Thank you for registering with HealthVMS! Please click the following link to confirm your registration.

<?php echo $html->url('/users/confirm/'. $username . '/' . $hash, true) ?>