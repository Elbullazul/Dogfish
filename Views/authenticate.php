<?php

use utils\post_util;
use utils\session_util;

if (post_util::is_set('inputUser')) {
    $_user = htmlentities(post_util::get('inputUser'));
}

if (post_util::is_set('inputPassword')) {
    $_auth = htmlentities(post_util::get('inputPassword'));
}

if (isset($_user) && isset($_auth)) {
    // TODO: check user data here
    if (security_service::validate_credentials($_user, $_auth)) {
        session_util::set('user', $_user);
        session_util::set('user-privileges', 1);
        $this->redirect('dashboard');
    } else {
        $this->redirect('login', array('msg' => '@UI18'));
    }
} else {
    $this->redirect('login');
}

?>
