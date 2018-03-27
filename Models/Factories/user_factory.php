<?php

namespace Factories;

use Managers\manager;
use Models\user;
use Managers\user_manager;
use Repositories\user_repository;

abstract class user_factory
{

    static function find($_user)
    {
        //TODO: Move this to convenient manager
        return \handler::run('entity_manager', 'find', array($_user));
    }

    static function find_by_id($_user_id)
    {
        return user_repository::find_by_id($_user_id);
    }

    static function find_by_username($_username)
    {
        var_dump(user_manager::class);

        $ret = \handler::run(user_manager::class, 'find_by_username', array($_username));
        $usr = new user();
        return manager::entity2model($ret, $usr);
    }
}

?>
