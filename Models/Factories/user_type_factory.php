<?php

namespace Factories;

use Managers\user_type_manager;
use Models\user_type;
use Managers\manager;

class user_type_factory
{

    static function find($_model)
    {

    }

    static function find_by_id($_type_id)
    {
        $type = new user_type();
        $ret = \handler::run(user_type_manager::class, 'find_by_id', array($_type_id));
        $ret = \data_service::to_model($ret, $type);
        return $ret;
    }

}

?>