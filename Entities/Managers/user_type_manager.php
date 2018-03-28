<?php

namespace Managers;

class user_type_manager extends manager
{

    function find_by_id(array $args)
    {
        $repository = new \user_type_repository();
        return $repository->find_by_id($args[0]);
    }
}

?>
