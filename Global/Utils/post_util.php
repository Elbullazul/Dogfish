<?php

namespace utils;

abstract class post_util {
  static function set($_key, $_value) {
    $_POST[$_key] = htmlentities($_value);
  }

  static function get($_key) {
    return isset($_POST[$_key]) ? htmlentities($_POST[$_key]) : "" ;
  }
}

?>
