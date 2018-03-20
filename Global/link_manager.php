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
        $url='/user/authenticate';
        break;
      case 'activity':
        $url='/user/activity';
        break;
      case 'dashboard':
        $url='/user/dashboard';
        break;
      case 'logout':
        $url='/user/logout';
        break;
      default:
        $url='/public/home';
        break;
    }

    return $url;
  }
  static function get_home_link() {
    if (session_util::get('user') != "") {
      return link_manager::get_link('dashboard');
    } else {
      return link_manager::get_link('home');
    }
  }
}

?>
