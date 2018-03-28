<?php

use Utils\session_util;

if (session_util::is_set('user')) {
    session_util::destroy('user');
}
if (session_util::is_set('user-privileges')) {
    session_util::destroy('user-privileges');
}

$this->redirect('login');
?>
