<?php

use \managers\user_manager;
use \managers\entity_manager;
use \managers\user_type_manager;

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
