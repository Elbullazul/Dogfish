<?php

namespace Models;

class users {
  private $id;
  private $name;
  private $email;
  private $picture; // optional
  private $username;
  private $password;

  function __construct($_id = "", $_name = "", $_email = "", $_username = "", $_password = "") {
    $this->id = $_id;
    $this->name = $_name;
    $this->email = $_email;
    $this->username = $_username;
    $this->password = $_password;
  }

  function set_id($_id) {
    $this->id = $_id;
  }

  function get_id() {
    return $this->id;
  }

  function set_name($_name) {
    $this->name = $_name;
  }

  function get_name() {
    return $this->name;
  }

  function set_email($_email) {
    $this->email = $_email;
  }

  function get_email() {
    return $this->email;
  }

  function set_username($_username) {
    $this->username = $_username;
  }

  function get_username() {
    return $this->username;
  }

  function set_password($_password) {
    $this->password = $_password;
  }

  function get_password() {
    return $this->password;
  }

  function empty() {
    if (
      !isset($this->id) &&
      !isset($this->name) &&
      !isset($this->email) &&
      !isset($this->username) &&
      !isset($this->password)) {
      return true;
    } else {
      return false;
    }
  }

  static function equals($object) {
    if (
      $this->id == $object->get_id() &&
      $this->name == $object->get_name() &&
      $this->email == $object->get_email() &&
      $this->username == $object->get_username() &&
      $this->password == $object->get_password()) {
      return true;
    } else {
      return false;
    }
  }

  function get_data_fields() {
    return array('id', 'name', 'email', 'username', 'password');
  }

}

?>
