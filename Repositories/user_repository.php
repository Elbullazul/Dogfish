<?php

use Entities\user_entity;

class user_repository extends repository
{
    function find($_model)
    {
        $Cnn = connection::getInstance();
        $cmd = 'SELECT * FROM users
            WHERE users.username = :username
            AND users.password = :hash';

        $user_data = $Cnn->prepare($cmd);

        $user_data->bindValue('username', $_username, PDO::PARAM_STR);
        $user_data->bindValue('hash', $_hash, PDO::PARAM_STR);
        $user_data->execute();

        $users = array();

        while ($rows = $user_data->fetch()) {
            $user = new user_entity();

            foreach ($rows as $field => $value) {
                $user->$field = $value;
            }

            array_push($users, $user);
        }

        return $users;
    }

    function find_by_username($_username)
    {
        $Cnn = connection::getInstance();
        $cmd = 'SELECT
              user_id,
              username,
              type as user_type,
              password,
              modified_by,
              date_created,
              date_modified
            FROM users
            WHERE users.username = :username';

        $user_data = $Cnn->prepare($cmd);

        $user_data->bindValue('username', $_username, PDO::PARAM_STR);
        $user_data->setFetchMode(PDO::FETCH_CLASS, $this->entity, array());
        $user_data->execute();
        $user = $user_data->fetch();

        if (!$user) {   // query returned NULL
            $user = new user_entity();
        }

        return $user;
    }

    function save($_model)
    {
        return false;
    }

    function update($_model, $_new_model)
    {
        return false;
    }

    function destroy($_model)
    {
        return false;
    }

    protected function entity()
    {
        $this->entity = user_entity::class;
    }
}

?>
