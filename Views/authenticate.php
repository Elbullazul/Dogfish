<?php

use Utils\post_util;
use Utils\session_util;

if (post_util::is_set('inputUser')) {
    $_user = htmlentities(post_util::get('inputUser'));
}

if (post_util::is_set('inputPassword')) {
    $_key = htmlentities(post_util::get('inputPassword'));
}

if (isset($_user) && isset($_key)) {
    if (security_service::validate_credentials($_user, $_key)) {
        $this->redirect('dashboard');
    } else {
        flash_service::set('@UI18', flash_service::$WARNING, true);
        $this->redirect('login');
    }
} else {
    $this->redirect('login');
}

?>
