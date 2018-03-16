<?php

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
  protected $model_factory = NULL;

  function __construct() {
    $this->ROOT = __DIR__ . '\..';
    $this->VIEWS = __DIR__ .'\..\Views';
    $this->CONTROLLERS = __DIR__ . '\..\Controllers';
    $this->MODELS = __DIR__ . '\..\Models';
    $this->REPOSITORIES = __DIR__ . '\..\Repositories';
    $this->TEMPLATES = __DIR__ . '\..\Views\Templates';
    $this->ENTITIES = __DIR__ . '\..\'Entities';
    $this->GLOBAL = __DIR__ . '\..\Global';

    $this->model_factory = new model_factory();
  }

  function gen_view($_view) {
    $path = 'Views/'.$_view.'.php';

    // include security module here

    // include master template
    include_once utils::build_path($this->TEMPLATES, 'master.php');
  }

  function gen_repository($_repository) {
    
  }

  function gen_error_view($_error) {
    // generate error page with custom error message
    require_once(utils::build_path($this->VIEWS, 'error.php'));
  }
}

?>
