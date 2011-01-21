<div id="header">
    <div id="logo">
        <a href="/hvms/">
        <img src="<?php echo $this->webroot ?>img/logo.png" alt="HealthVMS" title="HealthVMS" />
        </a>
    </div>
    
    <div id="mast">

    <?php if ($session->read('Auth.User.username')) { ?>
        <?php echo '<span class="chatty">Hello, ' . $session->read('Auth.User.username') . '.</span>'; ?>
        <?php echo '<span id="logout">(' . $html->link('Logout', array('controller' => 'users', 'action' => 'logout', 'admin' => false)) . ' if you\'re not this user)</span>'; ?>
    <?php
    }
    else {
        echo $html->link('Login', array('controller' => 'users', 'action' => 'login')) . ' if you have an account. Want an account? ' . $html->link('Register.', array('controller' => 'users', 'action' => 'register')) ;
    }
    ?>
    </div>
    
    <?php
        $tabs = array();
        $tabs['Home'] = array ('controller' => 'pages', 'action' => 'display', 'admin' => false);
        if ($session->read('Auth.User.username') &&
            $session->read('Auth.User.type') != 'admin') {
            $tabs['My Profile'] =  array('controller' => 'profiles', 'action' => 'edit');
            
            if ($session->read('Auth.User.type') == 'cand') {
                $tabs['Find Jobs'] = array('controller' => 'jobs', 'action' => 'search');
            }
            else if ($session->read('Auth.User.type') == 'hosp') {
                $tabs['Find Employees'] = array('controller' => 'profiles', 'action' => 'search');
                $tabs['My Jobs'] = array('controller' => 'jobs', 'action' => 'index');                
            }
            
            $tabs['My Interests'] = array('controller' => 'interests', 'action' => 'index');
        }
    ?>
    <div id="nav-left">
       <div id="nav-right">
        <ul id="menu" class="clearfix">
            <?php
            foreach ($tabs as $linkText => $url) {
                $class = '';
                if ($this->params['controller'] == $url['controller'] &&
                    (($this->params['action'] != 'search' && $url['action'] != 'search') ||
                    (($this->params['action'] == 'search') && $this->params['action'] == $url['action']))) {
                    $class = ' class="selected"';
                }
                echo "<li{$class}>" . $html->link($linkText, $url) . '</li>';
            }
            ?>
        </ul>
        </div>
    </div>
</div>