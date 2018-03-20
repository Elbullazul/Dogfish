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
    if (isset($_SESSION[$_key])) {
      session_util::set($_key, NULL);
      unset($_SESSION[$_key]);
    } else {
     return false;
   }
  }
}

?>
