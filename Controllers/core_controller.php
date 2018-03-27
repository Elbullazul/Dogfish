<?php

use Utils\path_util;
use Utils\session_util;

abstract class core_controller
{

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

    function __construct()
    {
        $this->ROOT = __DIR__ . '\..';
        $this->VIEWS = __DIR__ . '\..\Views';
        $this->CONTROLLERS = __DIR__ . '\..\Controllers';
        $this->MODELS = __DIR__ . '\..\Models';
        $this->REPOSITORIES = __DIR__ . '\..\Repositories';
        $this->TEMPLATES = __DIR__ . '\..\Views\Templates';
        $this->ENTITIES = __DIR__ . '\..\'Entities';
        $this->GLOBAL = __DIR__ . '\..\Global';
        $this->PARTS = __DIR__ . '\..\Views\Templates\Parts';
        $this->RESOURCES = __DIR__ . '\..\Resources';

        $this->set_access_policies();
    }

    function get_access_level()
    {
        return $this->ACCESS_LEVEL;
    }

    function gen_view($_view)
    {
        $path = path_util::build($this->VIEWS, $_view . '.php');
        // include master template
        require_once path_util::build($this->TEMPLATES, 'master.php');
    }

    function gen_empty_view($_view)
    {
        // skip template
        require_once path_util::build($this->VIEWS, $_view . '.php');
    }

    function gen_error_view($_error)
    {
        // generate error page with custom error message
        require_once path_util::build($this->VIEWS, 'error.php');
    }

    protected function gen_repository($_repository)
    {
        // new repository if exists, else return error
        if (file_exists(path_util::build($this->REPOSITORIES, $_repository . '_repository.php'))) {
            $repo = $_repository . '_repository.php';
            return new $repo();
        } else {
            throw new Exception(label_manager::get_label('@SYS02'), 1);
        }
    }

    function resource($_path)
    {
        // load page resources from source path
        return path_util::build($this->RESOURCES, $_path);
    }

    function get_part_path($_part)
    {
        return path_util::build($this->PARTS, $_part);
    }

    protected function redirect($_view, $args = array())
    {
        // clear current web page
        ob_start();
        ob_end_clean();

        // go to & parse get args (if any)
        if (!empty($args)) {
            foreach ($args as $key => $value) {
                session_util::set($key, $value);
            }
        }
        header("Location: " . link_manager::get_link($_view));
    }

    function invoke($action, $args = array())
    {
        if (method_exists($this, $action) && in_array($action, $this->actions())) {
            call_user_func_array(array($this, $action), array($args));
        } else {
            $this->gen_error_view(label_manager::get_label('@SYS01'));
        }
    }

    function is_user_connected()
    {
        return session_util::is_set('user');
    }

    abstract function name();

    abstract function actions();

    abstract function main_view();

    abstract protected function set_access_policies();
}

?>
