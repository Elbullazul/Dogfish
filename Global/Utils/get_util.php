<?php

namespace utils;

abstract class get_util {
  static function set($_key, $_value) {
    $_GET[$_key] = htmlentities($_value);
  }

  static function get($_key) {
    return isset($_GET[$_key]) ? htmlentities($_GET[$_key]) : "" ;
  }
}

?>
