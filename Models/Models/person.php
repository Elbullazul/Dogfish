<?php

namespace Models;

abstract class person extends model
{

    protected $last_name;
    protected $first_name;
    protected $phone_number;
    protected $birthdate;
    protected $sex;

    abstract function empty();

    abstract function equals($_object);

    abstract function properties();

    function last_name($_last_name = NULL)
    {
        if (!is_null($_last_name))
            $this->last_name = $_last_name;
        return $this->last_name;
    }

    function first_name($_first_name = NULL)
    {
        if (!is_null($_first_name))
            $this->first_name = $_first_name;
        return $this->first_name;
    }

    function phone_number($_phone_number = NULL)
    {
        if (!is_null($_phone_number))
            $this->phone_number = $_phone_number;
        return $this->phone_number;
    }

    function birthdate($_birthdate = NULL)
    {
        if (!is_null($_birthdate))
            $this->birthdate = $_birthdate;
        return $this->birthdate;
    }

    function sex($_sex = NULL)
    {
        if (!is_null($_sex))
            $this->sex = $_sex;
        return $this->sex;
    }
}

?>