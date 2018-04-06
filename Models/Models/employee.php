<?php

namespace Models;

class employee extends person
{

    private $employee_id;
    private $role;

    function employee_id($_employee_id = NULL)
    {
        if (is_null($_employee_id))
            $this->employee_id = $_employee_id;
        return $this->employee_id;
    }

    function role($_role = NULL)
    {
        if (is_null($_role))
            $this->role = $_role;
        return $this->role;
    }

    function empty()
    {
        if (empty($this->last_name) &&
            empty($this->first_name) &&
            empty($this->phone_number) &&
            empty($this->birthdate) &&
            empty($this->sex) &&
            empty($this->employee_id) &&
            empty($this->role)) {
            return true;
        } else {
            return false;
        }
    }

    function equals($_object)
    {
        if ($this->last_name == $_object->last_name() &&
            $this->first_name == $_object->first_name() &&
            $this->phone_number == $_object->phone_number() &&
            $this->birthdate == $_object->birthdate() &&
            $this->sex == $_object->sex() &&
            $this->employee_id == $_object->employee_id() &&
            $this->role == $_object->role()) {
            return true;
        } else {
            return false;
        }
    }

    function properties()
    {
        return array(
            "last_name" => $this->last_name,
            "first_name" => $this->first_name,
            "phone_number" => $this->phone_number,
            "birthdate" => $this->birthdate,
            "sex" => $this->sex,
            "employee_id" => $this->employee_id,
            "role" => $this->role
        );
    }
}

?>