<?php

// namespace Security;

abstract class security_service {

  public static $PUBLIC = 0;
  public static $USER = 1;
  public static $ADMIN = 2;

  public static $NO_AUTH_REQUIRED = 0;
  public static $USER_NOT_CONNECTED = 1;
  public static $AUTH_SUCCESSFUL = 2;
  public static $INSUFFICIENT_PRIVILEGES = 3;

  // public function is_access_granted($_controller) {
  //   $access_granted = false;
  //   $ACCESS_LEVEL = $_controller->get_access_level();
  //   // controller data
  //   $USER_CONNECTED = $_controller->is_user_connected();
  //   $USER_PRIVILEGES = $_controller->get_user_privileges();
  //
  //
  //   if ($ACCESS_LEVEL > self::$PUBLIC) {  // if view not public
  //     if ($ACCESS_LEVEL == self::$USER) {  // if view is user required
  //       if ($USER_CONNECTED) {
  //         $access_granted = true;
  //       }
  //       // user not connected, denied
  //     } elseif ($ACCESS_LEVEL == self::$ADMIN) {
  //       if ($USER_CONNECTED && )
  //     }
  //
  //     // view has conditions not met
  //   } else {  // view is public
  //     $access_granted = true;
  //   }
  //   return $access_granted;
  // }

  public static function validate_access($_controller) {
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
}

?>
