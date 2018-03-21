<?php

use utils\session_util;

abstract class link_manager {
  static function get_link($_view) {
    switch ($_view) {
      case 'login':
        $url = '/public/login';
        break;
      case 'home':
        $url='/public/home';
        break;
      case 'profile':
        $url='/user/profile';
        break;
      case 'authenticate':
        $url='/public/authenticate';
        break;
      case 'activity':
        $url='/user/activity';
        break;
      case 'dashboard':
        $url='/user/dashboard';
        break;
      case 'logout':
        $url='/public/logout';
        break;
      case 'error':
        $url='/public/error';
        break;
      default:
        $url='/public/home';
        break;
    }

    return $url;
  }
}

?>
