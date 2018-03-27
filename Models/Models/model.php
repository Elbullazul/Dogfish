<?php

namespace Models;

abstract class model
{
    abstract function empty();

    abstract function equals($_object);

    abstract function properties();

    function fill(array $_data)
    {
        foreach ($_data as $field => $value) {
            $this->$field = $value;
        }
    }
}
