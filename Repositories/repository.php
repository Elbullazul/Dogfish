<?php

abstract class repository
{
    protected $model;
    protected $entity;

    function __construct()
    {
        $this->model();
        $this->entity();
    }

    abstract protected function model();

    abstract protected function entity();

    abstract function save($_model);

    abstract function update($_model, $_new_model);

    abstract function destroy($_model);
}

?>
