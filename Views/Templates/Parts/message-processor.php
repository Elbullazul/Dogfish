<?php

use Utils\path_util;
use Utils\session_util;

if (session_util::is_set('msg')) {
    $label = session_util::get('msg');
    $msg = labels::get_label($label);
    session_util::destroy('msg');

    require_once $this->get_part_path('message.php');
} elseif (session_util::is_set('error_msg')) {
    $label = session_util::get('error_msg');
    $msg = labels::get_label($label);
    session_util::destroy('error_msg');

    require_once $this->get_part_path('error-message.php');
}
?>
