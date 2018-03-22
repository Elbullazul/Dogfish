<?php

// usings
use utils\path_util;
use utils\post_util;
use utils\session_util;

abstract class core_controller {

  // location variables
  public $ROOT;
  public $VIEWS;
  public $CONTROLLERS;
  public $MODELS;
  public $REPOSITORIES;
  public $TEMPLATES;
  public $ENTITIES;
  public $GLOBAL;
  public $PARTS;
  public $RESOURCES;

  // access levels determine whether a user can see the view or not
  protected $ACCESS_LEVEL;

  function __construct() {
    $this->ROOT = __DIR__. '\..';
    $this->VIEWS = __DIR__.'\..\Views';
    $this->CONTROLLERS = __DIR__. '\..\Controllers';
    $this->MODELS = __DIR__. '\..\Models';
    $this->REPOSITORIES = __DIR__. '\..\Repositories';
    $this->TEMPLATES = __DIR__. '\..\Views\Templates';
    $this->ENTITIES = __DIR__. '\..\'Entities';
    $this->GLOBAL = __DIR__. '\..\Global';
    $this->PARTS = __DIR__.'\..\Views\Templates\Parts';
    $this->RESOURCES = __DIR__.'\..\Resources';

    $this->set_access_level();
  }

  abstract protected function set_access_level();

  function get_access_level() {
    return $this->ACCESS_LEVEL;
  }

  protected function gen_view($_view) {
    // path for master import
    $path = path_util::build($this->VIEWS, $_view.'.php');

    // check user access rights
    switch (security_service::validate_access($this)) {
      case security_service::$NO_AUTH_REQUIRED:
      case security_service::$AUTH_SUCCESSFUL:
        include_once path_util::build($this->TEMPLATES, 'master.php');  // include master template
        break;
      case security_service::$USER_NOT_CONNECTED:
        $this->redirect('login');
        break;
      case security_service::$INSUFFICIENT_PRIVILEGES:
        $this->redirect('dashboard');
        break;
    }
  }

  protected function gen_repository($_repository) {
    // new repository if exists, else return error
    if (file_exists(path_util::build($this->REPOSITORIES, $_repository.'_repository.php'))) {
      $repo = $_repository.'_repository.php';
      return new $repo();
    } else {
      throw new Exception(label_manager::get_label('@SYS02'), 1);
    }
  }

  protected function gen_error_view($_error) {
    // generate error page with custom error message
    require_once(path_util::build($this->VIEWS, 'error.php'));
  }

  function resource($_path) {
    // load page resources from source path
    return path_util::build($this->RESOURCES, $_path);
  }

  protected function redirect($_view) {
    // clear current webpage
    ob_start();
    ob_end_clean();

    // go to
    header("Location: ".link_manager::get_link($_view));
  }

  function invoke($action, $args = array()) {
    if (method_exists($this, $action)) {
      call_user_func_array(array($this, $action), array($args));
    } else {
      //throw new Exception(label_manager::get_label('@SYS03'));
      $this->gen_error_view(label_manager::get_label('@SYS01'));
    }
  }

  function is_user_connected() {
    return session_util::is_set('user');
  }

  function get_user_privileges() {
    return session_util::get('user-privileges');
  }

  abstract function name();
}

?>
