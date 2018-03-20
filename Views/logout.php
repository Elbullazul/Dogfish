<?php

use utils\session_util;

if (session_util::get('user') != "") {
  session_util::destroy('user');
}

$this->redirect('login');
?>
