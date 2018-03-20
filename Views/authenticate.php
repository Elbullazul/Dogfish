<?php

use utils\post_util;
use utils\session_util;

if (post_util::get('inputUser') != "") {
  $_user = htmlentities(post_util::get('inputUser'));
}

if (post_util::get('inputPassword') != "") {
  $_auth = htmlentities(post_util::get('inputPassword'));
}

if (isset($_user) && isset($_auth)) {

  if (true) {
    session_util::set('user', $_user);
    $this->redirect('dashboard');
  }
}
else {
  $this->redirect('login');
}

?>
