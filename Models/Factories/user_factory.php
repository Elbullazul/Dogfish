<?php

namespace Factories;

use Models\user;
use Managers\manager;
use Managers\user_manager;

abstract class user_factory
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
        $ret = \data_service::to_model($ret, $usr);
        return $ret;
    }
}

?>
