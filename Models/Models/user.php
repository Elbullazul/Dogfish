<?php

namespace Models;

class user extends model {
  private $id;
  private $name;
  private $email;
  // private $picture; // optional
  private $username;
  private $password;

  public function get_properties() {
    return array(
      "id" => $this->id,
      "name" => $this->name,
      "email" => $this->email,
      "username" => $this->username,
      "password" => $this->password
    );
  }

  function id($_id = NULL) {
    if (!is_null($_id))
      $this->id = $_id;
    return $this->id;
  }

  function name($_name = NULL) {
    if (!is_null($_name))
      $this->name = $_name;
    return $this->name;
  }

  function email($_email = NULL) {
    if (!is_null($_email))
      $this->email = $_email;
    return $this->email;
  }

  function username($_username = NULL) {
    if (!is_null($_username))
      $this->username = $_username;
    return $this->username;
  }

  function password($_password = NULL) {
    if (!is_null($_password))
      $this->password = $_password;
    return $this->password;
  }

  function empty() {
    if (
      empty($this->id       &&
      empty($this->name)     &&
      empty($this->email)    &&
      empty($this->username) &&
      empty($this->password)) {
      return true;
    } else {
      return false;
    }
  }

  function equals($_object) {
    if (
      $this->id       == $_object->id()       &&
      $this->name     == $_object->name()     &&
      $this->email    == $_object->email()    &&
      $this->username == $_object->username() &&
      $this->password == $_object->password()) {
      return true;
    } else {
      return false;
    }
  }

}

?>
