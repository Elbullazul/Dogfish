<?php

use Utils\url_util;

class application
{
    function __construct()
    {
        session_start();

        // setup application language
        labels::set_locale();

        // get web page requested
        $params = url_util::parse();

        // start controller service
        $service = new controller_service($params[0], $params[1]);
        $service->start();

//        $controller = controller_service::gen_controller($params);
//        $controller = new $controller();
//        $controller->invoke($action);

//        if (file_exists('Controllers/'.$parameters[0].'_controller.php')) {
//            $_controller = $parameters[0].'_controller';
//            $app_controller = new $_controller();
//
//            $_action = $parameters[1];
//            $app_controller->invoke($_action);
//        } elseif ($parameters[0] == "") {
//            $app_controller = new public_controller();
//            $app_controller->main_view();
//        } else {
//            $app_controller = new public_controller();
//            $app_controller->gen_error_view(labels::get_label('@SYS01'));
//        }
    }

}

?>
