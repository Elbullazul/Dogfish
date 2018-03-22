<?php

use models\user;

class public_controller extends core_controller {
  protected function set_access_level() {
    $this->ACCESS_LEVEL = 0;
  }

  function name() {
    return 'public';
  }

  // allowed actions for the controller
  function home() {
    $this->gen_view('home');
  }

  function login() {
    $this->gen_view('login');
  }

  function logout() {
    $this->gen_view('logout');
  }

  function authenticate() {
    $this->gen_view('authenticate');
  }
}

 ?>
