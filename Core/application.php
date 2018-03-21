<?php

// usings
use utils\url_util;
use utils\get_util;

class application {
  public static $locale = 'en-us';

  function __construct() {

    session_start();

    // setup application language
    label_manager::$locale = label_manager::get_locale();

    $controller = 'public';
    $action     = 'login';
    $parameters = url_util::parse();

    if (file_exists('Controllers/'.$parameters[0].'_controller.php')) {
      $_controller = $parameters[0].'_controller';
      $_action = $parameters[1];

      $app_controller = new $_controller();
      $app_controller->invoke($_action);
    } elseif ($parameters[0] == "") {
      $app_controller = new public_controller();
      $app_controller->gen_view('login');
    } else {
      $app_controller = new public_controller();
      $app_controller->gen_error_view(label_manager::get_label('@SYS01'));
    }
  }

}

?>
