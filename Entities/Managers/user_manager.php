<?php

namespace Managers;

class user_manager extends manager
{

    function find_by_username(array $args)
    {
        $repository = new \user_repository();
        return $repository->find_by_username($args[0]);
    }
}

?>
