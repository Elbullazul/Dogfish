<?php

// usings
use utils\url_util;

class application {
  public static $locale = 'en-us';

  function __construct() {

    session_start();

    // setup application language
    self::$locale = label_manager::get_locale();

    if (isset($_GET['controller']) && isset($_GET['action'])) {
      $controller = $_GET['controller'];
      $action     = $_GET['action'];
    } else {
      $controller = 'public';
      $action     = 'home';
    }

    $parameters = url_util::parse();

    if (file_exists('Controllers/'.$parameters[0].'_controller.php')) {
      $_controller = $parameters[0].'_controller';

      $app_controller = new $_controller();
      $app_controller->gen_view($parameters[1]);
    } else {
      $app_controller = new core_controller();
      $app_controller->gen_error_view(label_manager::get_label('@SYS01'));
    }
  }

}

?>
