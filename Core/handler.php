<?php

use Managers\user_manager;
use Managers\user_type_manager;

abstract class handler
{
    static function run($manager, $method, $args = array())
    {
        $manager = new $manager();
        if (!empty($args)) {
            $ret = $manager->$method($args);
        } else {
            $ret = $manager->$method();
        }

        return $ret;
    }
}

?>
