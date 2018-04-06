<?php

use Utils\session_util;
use Factories\user_factory;
use Factories\user_type_factory;

abstract class security_service
{

    public static $PUBLIC = 0;
    public static $STUDENT = 1;
    public static $TEACHER = 2;
    public static $MANAGER = 3;
    public static $ADMINISTRATOR = 4;

    public static $NO_AUTH_REQUIRED = 0;
    public static $USER_NOT_CONNECTED = 1;
    public static $AUTH_SUCCESSFUL = 2;
    public static $INSUFFICIENT_PRIVILEGES = 3;

    public static function load_access_levels() {
        $Cnn = connection::getInstance();
        // TODO: Load all access levels in array & use instead of static variables
    }

    public static function validate_access($_controller)
    {
        $ACCESS_LEVEL_REQUIRED = $_controller->get_access_level();
        $USER_CONNECTED = $_controller->is_user_connected();
        $USER_PRIVILEGES = $_controller->get_user_privileges();

        if ($ACCESS_LEVEL_REQUIRED == self::$PUBLIC) {  // public view
            return self::$AUTH_SUCCESSFUL;
        } else {
            if (!$USER_CONNECTED) {
                return self::$USER_NOT_CONNECTED;
            } else {
                if ($USER_PRIVILEGES >= $ACCESS_LEVEL_REQUIRED) {
                    return self::$AUTH_SUCCESSFUL;
                } else {
                    return self::$INSUFFICIENT_PRIVILEGES;
                }
            }
        }
    }

    public static function validate_credentials($_username, $_password)
    {
        // pool repo for user
        $user = user_factory::find_by_username($_username);
        if (!$user->empty() && $user->password() == $_password) {
//            $user_type = user_type_factory::find_by_id($user->user_type());
//            if (!$user_type->empty() && $user_type->type_id() == $user->user_type()) {
                session_util::set('user', $_username);
                session_util::set('user-privileges', $user->user_type()->access_level());
                return true;
//            } else {
//                return false;
//            }
        } else {
            return false;
        }
    }

    public static function get_controller_by_access_level($_access_level)
    {
        // TODO: Create missing controllers
        switch ($_access_level) {
            case self::$STUDENT:
                return new student_controller();
                break;
            case self::$TEACHER:
                return new user_controller();
                break;
            case self::$MANAGER:
                return new user_controller();
                break;
            case self::$ADMINISTRATOR:
                return new admin_controller();
                break;
            default:
                return new public_controller();
                break;
        }
    }
}

?>
