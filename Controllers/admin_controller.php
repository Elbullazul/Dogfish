<?php

class admin_controller extends core_controller {
  function set_access_level() {
    $this->ACCESS_LEVEL = 2;
  }

  function name() {
    return 'admin';
  }

  // authorized controller actions
  function actions() {
    $this->gen_view('actions');
  }

  function users() {
    $this->gen_view('users');
  }
}

?>
