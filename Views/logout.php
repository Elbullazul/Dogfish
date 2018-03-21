<?php

use utils\session_util;

if (session_util::is_set('user')) {
  session_util::destroy('user');
}

$this->redirect('login');
?>
