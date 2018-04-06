<?php

use Utils\session_util;

if (session_util::is_set('user')) {
    session_util::destroy('user');
}
if (session_util::is_set('user-privileges')) {
    session_util::destroy('user-privileges');
}
if (session_util::is_set('controller')) {
    session_util::destroy('controller');
}

$this->redirect('login');
?>
