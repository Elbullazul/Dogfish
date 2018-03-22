<?php

use utils\get_util;
use utils\path_util;
use utils\session_util;

use models\users;

class user_controller extends core_controller {
  function set_access_level() {
    $this->ACCESS_LEVEL = 1;
  }

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

  function settings() {
    $this->gen_view('settings');
  }

}

 ?>
