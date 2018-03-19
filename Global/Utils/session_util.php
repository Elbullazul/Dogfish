<?php

namespace utils;

abstract class session_util {
  static function set($_key, $_value) {
    $_SESSION[$_key] = htmlentities($_value);
  }

  static function get($_key) {
    return isset($_SESSION[$_key]) ? htmlentities($_SESSION[$_key]) : "";
  }

  static function destroy($_key) {
    isset($_SESSION[$_key]) ? unset($_SESSION[$_key]) : return false;
  }
}

?>
