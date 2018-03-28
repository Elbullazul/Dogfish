<?php

namespace Models;

class user extends model
{
    private $user_type;
    private $user_id;
    private $username;
    private $password;

    public function properties()
    {
        return array(
            "user_type" => $this->user_type,
            "user_id" => $this->user_id,
            "username" => $this->username,
            "password" => $this->password
        );
    }

    function user_type($_user_type = NULL)
    {
        if (!is_null($_user_type))
            $this->user_type = $_user_type;
        return $this->user_type;
    }

    function user_id($_user_id = NULL)
    {
        if (!is_null($_user_id))
            $this->user_id = $_user_id;
        return $this->user_id;
    }

    function username($_username = NULL)
    {
        if (!is_null($_username))
            $this->username = $_username;
        return $this->username;
    }

    function password($_password = NULL)
    {
        if (!is_null($_password))
            $this->password = $_password;
        return $this->password;
    }

    function empty()
    {
        if (
            empty($this->user_type) &&
            empty($this->user_id) &&
            empty($this->username) &&
            empty($this->password)) {
            return true;
        } else {
            return false;
        }
    }

    function equals($_object)
    {
        if (
            $this->user_type == $_object->user_type() &&
            $this->user_id == $_object->user_id() &&
            $this->username == $_object->username() &&
            $this->password == $_object->password()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
