<?php

use factories\user_factory;

abstract class security_service
{

    public static $PUBLIC = 0;  // base access level

    public static $NO_AUTH_REQUIRED = 0;
    public static $USER_NOT_CONNECTED = 1;
    public static $AUTH_SUCCESSFUL = 2;
    public static $INSUFFICIENT_PRIVILEGES = 3;

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

    public static function validate_credentials($_user, $_password)
    {
        // pool repo for user
        $usr = user_factory::find_by_username($_user);
        if (!$usr->empty() && $usr->password() == $_password) {
            return true;
        } else {
            return false;
        }
    }
}

?>
