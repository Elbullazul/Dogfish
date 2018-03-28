<?php

namespace Models;

class user_type extends model
{
    private $type_id;
    private $access_level;
    private $description;

    function type_id($_type_id = NULL)
    {
        if (!is_null($_type_id))
            $this->type_id = $_type_id;
        return $this->type_id;
    }

    function access_level($_access_level = NULL)
    {
        if (!is_null($_access_level))
            $this->access_level = $_access_level;
        return $this->access_level;
    }

    function description($_description = NULL)
    {
        if (!is_null($_description)) {
            $this->description = $_description;
        }
        return $this->description;
    }

    function empty()
    {
        if (
            empty($this->type_id) &&
            empty($this->access_level) &&
            empty($this->description)) {
            return true;
        } else {
            return false;
        }
    }

    function equals($_object)
    {
        if (
            $this->type_id == $_object->type_id() &&
            $this->access_level == $_object->access_level() &&
            $this->description == $_object->description()) {
            return true;
        } else {
            return false;
        }
    }

    function properties()
    {
        return array(
            "type_id" => $this->type_id,
            "access_level" => $this->access_level,
            "description" => $this->description
        );
    }
}

?>