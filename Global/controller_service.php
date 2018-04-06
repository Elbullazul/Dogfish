<?php

use Utils\session_util;

class controller_service {

    private $req_namespace;
    private $req_action;

    private $user_connected = NULL;
    private $user_access_index = NULL;

    function __construct($namespace, $action) {
        $this->req_action = $action;
        $this->req_namespace = $namespace;
    }

    public function start() {
        $this->user_connected = session_util::is_set('user');
        $this->user_access_index = session_util::is_set('user-privileges');

        if ($this->req_namespace == "users") {
            $controller = $this->gen_user_controller();
        } else {
            $controller = $this->gen_controller();
        }

        $controller = new $controller();
        $controller->invoke($this->req_action);
    }

    private function gen_controller() {
        if ($this->controller_exists($this->req_namespace)) {
            $controller = $this->req_namespace.'_controller';
        } else {
            $controller = public_controller::class;
        }

        return $controller;
    }

    private function gen_user_controller()
    {
        if ($this->user_connected) {
            if ($this->user_access_index) {
                $access_level = session_util::get('user-privileges');

                // TODO: Create missing controllers
                switch ($access_level) {
                    case security_service::$STUDENT:
                        $controller = student_controller::class;
                        break;
                    case security_service::$TEACHER:
                        $controller = user_controller::class;
                        break;
                    case security_service::$MANAGER:
                        $controller = user_controller::class;
                        break;
                    case security_service::$ADMINISTRATOR:
                        $controller = admin_controller::class;
                        break;
                    default:
                        $controller = public_controller::class;
                        break;
                }
            } else {
                $controller = public_controller::class;
            }
        } else {
            $controller = public_controller::class;
        }

        return $controller;
    }

    public function controller_exists($controller) {
        return file_exists('Controllers/'.$controller.'_controller.php');
    }
}




?>