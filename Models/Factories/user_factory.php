<?php

namespace Factories;

use Managers\user_type_manager;
use Models\user;
use Managers\user_manager;
use Models\user_type;

abstract class user_factory extends factory
{

    static function find($_user)
    {
        //TODO: Move this to convenient manager
        $ret = \handler::run(user_manager::class, 'find', array($_user));
        return $ret;
    }

    static function find_by_id($_user_id)
    {
        $ret = user_repository::find_by_id($_user_id);
        return $ret;
    }

    static function find_by_username($_username)
    {
        $usr = new user();
        $ret = \handler::run(user_manager::class, 'find_by_username', array($_username));
        $ret = \data_service::to_model($ret, $usr); // to model

        // TODO: Do this somewhere else or in another way?
        $type = new user_type();
        $usr_type = \handler::run(user_type_manager::class, 'find_by_id', array($ret->user_type()));
        $usr_type = \data_service::to_model($usr_type, $type);

        var_dump($usr_type);

        $ret->user_type($usr_type);  // include user_type object
        return $ret;
    }
}

?>
