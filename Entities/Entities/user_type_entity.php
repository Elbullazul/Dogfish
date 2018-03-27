<?php

namespace Entities;

class user_type_entity extends entity
{
    private $type_id;
    private $access_level;
    private $description;

    function type_id($_type_id = NULL)
    {
        if (!is_null($_type_id)) {
            $this->type_id = $_type_id;
        }
        return $this->type_id;
    }

    function access_level($_access_level = NULL)
    {
        if (!is_null($_access_level)) {
            $this->access_level = $_access_level;
        }
        return $this->access_level;
    }

    function description($_description = NULL)
    {
        if (!is_null($_description)) {
            $this->description = $_description;
        }
        return $this->description;
    }

}

?>
