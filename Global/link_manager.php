<?php

abstract class link_manager {
  static function get_link($_view) {

    switch ($_view) {
      case 'login':
        $url = '/public/login';
        break;
      case 'home':
        $url='/public/home';
        break;
      case 'user-info':
        $url='/user/info';
        break;
      default:
        $url='/public/home';
        break;
    }

    return $url;
  }
}

?>
