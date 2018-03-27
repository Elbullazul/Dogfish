<?php

namespace Models;

class grade extends model
{

    private $evaluation_id;
    private $student_id;
    private $points;
    private $comment;

    function properties()
    {
        return array(
            "evaluation_id" => $this->evaluation_id,
            "student_id" => $this->student_id,
            "points" => $this->points,
            "comment" => $this->comment
        );
    }

    function evaluation_id($_evaluation_id = NULL)
    {
        if (!is_null($_evaluation_id))
            $this->evaluation_id = $_evaluation_id;
        return $this->evaluation_id;
    }

    function student_id($_student_id = NULL)
    {
        if (!is_null($_student_id))
            $this->student_id = $_student_id;
        return $this->student_id;
    }

    function points($_points = NULL)
    {
        if (!is_null($_points))
            $this->points = $_points;
        return $this->points;
    }

    function comment($_comment = NULL)
    {
        if (!is_null($_comment))
            $this->comment = $_comment;
        return $this->comment;
    }

    function empty()
    {
        if (
        empty($this->evaluation_id &&
            empty($this->student_id &&
                empty($this->points &&
                    empty($this->comment)) {
            return true;
        } else {
            return false;
        }
    }

    function equals($_object)
    {
        if (
            $this->evaluation_id == $_object->evaluation_id() &&
            $this->student_id == $_object->student_id() &&
            $this->points == $_object->points() &&
            $this->comment == $_object->comment()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
