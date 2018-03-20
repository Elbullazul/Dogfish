<?php

// usings
use utils\path_util;

class core_controller {

  // location variables
  public $ROOT;
  public $VIEWS;
  public $CONTROLLERS;
  public $MODELS;
  public $REPOSITORIES;
  public $TEMPLATES;
  public $ENTITIES;
  public $GLOBAL;

  protected $views = array();

  function __construct() {
    $this->ROOT = __DIR__ . '\..';
    $this->VIEWS = __DIR__ .'\..\Views';
    $this->CONTROLLERS = __DIR__ . '\..\Controllers';
    $this->MODELS = __DIR__ . '\..\Models';
    $this->REPOSITORIES = __DIR__ . '\..\Repositories';
    $this->TEMPLATES = __DIR__ . '\..\Views\Templates';
    $this->ENTITIES = __DIR__ . '\..\'Entities';
    $this->GLOBAL = __DIR__ . '\..\Global';
  }

  function gen_view($_view) {
    $path = 'Views/'.$_view.'.php';

    // include master template
    include_once path_util::build($this->TEMPLATES, 'master.php');
  }

  function gen_repository($_repository) {
    // new repository if exists, else return error
    if (file_exists(path_util::build($this->REPOSITORIES, $_repository.'_repository.php'))) {
      $repo = $_repository.'_repository.php';
      return new $repo();
    } else {
      throw new \Exception(label_manager::get_label('@SYS02'), 1);
    }
  }

  function gen_error_view($_error) {
    // generate error page with custom error message
    require_once(path_util::build($this->VIEWS, 'error.php'));
  }

  function resource($_path) {
    echo $_path;
    return 'Resources/'.$_path;
  }

  function name() {
    return 'core';
  }

  function redirect($_view) {
    ob_start();
    ob_end_clean();

    header("Location: ".link_manager::get_link($_view));
  }
}

?>
