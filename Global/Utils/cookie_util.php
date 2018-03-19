<?php

namespace utils;

abstract class cookie_util {
  static function set($_key, $_value, $_period = time() + 3600) {
    setcookie($_key, $_value, $_period);
  }

  static function get($_key) {
    return isset($_COOKIE[$_key]) ? htmlentities($_COOKIE[$_key]) : "" ;
  }

  static function destroy($_key) {
    isset($_COOKIE[$_key]) ? setcookie($_key, '', 1, '/', NULL, false, true) : return false;
  }
}


?>
