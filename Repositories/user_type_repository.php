<?php

use models\user;
use entities\user_entity;

class user_type_repository
{

    function find($_model)
    {

    }

    function find_by_username($_username, $_hash)
    {
        $Cnn = connection::getInstance();
        $cmd = 'SELECT * FROM users
            WHERE users.username = :username
            AND users.password = :hash';

        $user_data = $Cnn->prepare($cmd);

        $user_data->bindValue('username', $_username, PDO::PARAM_STR);
        $user_data->bindValue('hash', $_hash, PDO::PARAM_STR);
        $user_data->execute();

        $user = new user_entity();

        foreach ($data as $field => $value) {
            $user->$field = $value;
        }

        return $user;
    }

    function save($_model)
    {

    }

    function update($_model)
    {

    }

    function destroy($_model)
    {

    }
}


?>
