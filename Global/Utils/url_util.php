<?php

namespace utils;

abstract class url_util {
  static function get() {
    return get_util::get('url');
  }

  static function parse() {
    return explode("/",get_util::get('url'));
  }
}

?>
