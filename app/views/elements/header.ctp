<div id="header">
    <div id="logo">
        <img src="<?php echo Configure::read('app.home')?>img/logo.png" alt="HealthVMS" title="HealthVMS" />
    </div>
    <?php if ($session->read('Auth.User.username')) { ?>
    <div id="mast">
        <?php echo '<span class="chatty">Hello, ' . $session->read('Auth.User.username') . '.</span>'; ?>
        <?php echo '<span id="logout">(' . $html->link('Logout', array('controller' => 'users', 'action' => 'logout')) . ' if you\'re not this user)</span>'; ?>
    </div>
    <?php } ?>
    
    <div id="nav-left">
       <div id="nav-right">
        <ul id="menu">
            <li>
                <a href="<?php echo Configure::read('app.home') ?>">Home<a>
            </li>
        </ul>
        </div>
    </div>
</div>