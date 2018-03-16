<?php

abstract class utils {

  // get values from PHP storage
  static function pull_get($_key) {
    return isset($_GET[$_key]) ? htmlentities($_GET[$_key]) : false;
  }

  static function pull_post($_key) {
    return isset($_POST[$_key]) ? htmlentities($_POST[$_key]) : false;
  }

  static function pull_cookie($_key) {
    return isset($_COOKIE[$_key]) ? htmlentities($_COOKIE[$_key]) : false ;
  }

  static function pull_session($_key) {
    return isset($_SESSION[$_key]) ? htmlentities($_SESSION[$_key]) : false;
  }

  // create path from directory & file
  static function build_path($_dir, $_file) {
    return $_dir. '\\' .$_file;
  }

}

?>
