<?php

abstract class user_factory {

  /*
    $_data has the following structure:
    array(user_id, user_name, email, username, password)
  */

  protected static function get($_data) {
    return user_repository::get($_data);
  }

  protected static function set($_data, $_new_data) {
    user_repository::set($_data, $_new_data);
  }

  static function exists($_data) {
    $user = user_factory::get($_data);

    if (!$user->empty() && $user->get_id() == $_data[0]) {
      return $user;
    }
    else {
      return new user();
    }
  }

  static function
}




 ?>
