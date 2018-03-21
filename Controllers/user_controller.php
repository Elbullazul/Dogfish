<?php

use utils\get_util;
use utils\path_util;
use utils\session_util;

use models\users;

class user_controller extends core_controller {
  function name() {
    return 'user';
  }

  // allowed actions for the controller
  function dashboard() {
    $this->gen_view('dashboard');
  }

  function activity() {
    $this->gen_view('activity');
  }

  function profile() {
    $this->gen_view('profile');
  }

}

 ?>
