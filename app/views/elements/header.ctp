<div id="header">
    <div id="logo">
        <img src="<?php echo $this->webroot ?>img/logo.png" alt="HealthVMS" title="HealthVMS" />
    </div>
    <div id="mast">

    <?php if ($session->read('Auth.User.username')) { ?>
        <?php echo '<span class="chatty">Hello, ' . $session->read('Auth.User.username') . '.</span>'; ?>
        <?php echo '<span id="logout">(' . $html->link('Logout', array('controller' => 'users', 'action' => 'logout')) . ' if you\'re not this user)</span>'; ?>
    <?php
    }
    else {
        echo $html->link('Login', array('controller' => 'users', 'action' => 'login')) . ' if you have an account. Want an account? ' . $html->link('Register.', array('controller' => 'users', 'action' => 'register')) ;
    }
    ?>
    </div>
    
    <div id="nav-left">
       <div id="nav-right">
        <ul id="menu">
            <li>
                <a href="<?php echo $this->webroot ?>">Home<a>
            </li>
            <?php if ($session->read('Auth.User.username')) {
                echo '<li>';
                echo $html->link('My Profile', array('controller' => 'profiles', 'action' => 'view', $session->read('Auth.User.id')));
                echo '</li>';
            }
            ?>
        </ul>
        </div>
    </div>
</div>