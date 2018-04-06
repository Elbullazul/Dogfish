<?php

namespace Models;

class student extends person {

    private $student_id;
    private $level;

    function student_id($_student_id = NULL)
    {
        if (is_null($_student_id))
            $this->student_id = $_student_id;
        return $this->student_id;
    }

    function level($_level = NULL)
    {
        if (is_null($_level))
            $this->level = $_level;
        return $this->level;
    }

    function empty()
    {
        if (empty($this->last_name) &&
            empty($this->first_name) &&
            empty($this->phone_number) &&
            empty($this->birthdate) &&
            empty($this->sex) &&
            empty($this->student_id) &&
            empty($this->level)) {
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
            $this->student_id== $_object->student_id() &&
            $this->level == $_object->level()) {
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
            "student_id" => $this->student_id,
            "level" => $this->level
        );
    }


}

?>