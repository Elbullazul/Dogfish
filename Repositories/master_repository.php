<?php

class repository {
  private $model;
  private $fields;

  function __construct($_model, $_fields, $_table) {
    $this->model = $_model;

    foreach ($this->model->get_fields() as $field) {
      # code...
    }
    $this->fields;

  }

}

?>
