<?php

// include class file on instantiation
spl_autoload_register(function($_class) {
  $directories = array('Controllers', 'Entities', 'Global', 'Labels', 'Models', 'Repositories');
  foreach ($directories as $directory) {
    $path = __DIR__."/{$directory}/{$_class}.php";

    if(file_exists($path)) {
      require_once $path;
    }
  }
});

// $com_url = global::pull_get("url");
//
// if($com_url) {
//   $url explode("/",filter_var(rtrim($url, "/"),FILTER_SANITIZE_URL));
//
//   switch($url[0]) {
//
//     // controllers
//     case 'private':
//      $app_controller = new private_controller();
//      $app_controller->gen_view($action);
//      break;
//
//     case 'public':
//      $app_controller = new public_controller();
//      $app_controller->gen_view($action);
//      break;
//
//     default: // error page
//      $app_controller = new public_controller();
//      $app_controller->gen_error_view('404 - Not found');
//      break;
//   }
// }

// unset $com_url;

// get or set controller and actions
if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action     = $_GET['action'];
} else {
  $controller = 'public';
  $action     = 'home';
}

$app_controller = new public_controller();
$app_controller->gen_view($action);

// instantiate corresponding Controller
// switch ($controller) {
//   case 'private':
//    // new private Controller
//    $app_controller = new private_controller();
//    $app_controller->gen_view($action);
//    break;
//
//   case 'public':
//    // new public_controller
//    $app_controller = new public_controller();
//    $app_controller->gen_view($action);
//    break;
  //
  // default:
  //  // error page
  //  $app_controller = new public_controller();
  //  $app_controller->gen_error_view('Not found');
  //  break;
// }
?>
