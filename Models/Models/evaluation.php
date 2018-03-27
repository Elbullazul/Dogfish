<?php

namespace Models;

class evaluation extends model
{
    private $skills;
    private $weight;  // final grade weight of this evaluation
    private $is_final;
    private $is_global_weight;

    function properties()
    {
        return array(
            "skills" => $this->skills,
            "weight" => $this->weight,
            "is_final" => $this->is_final,
            "is_global_weight" => $this->is_global_weight
        );
    }

    function skills($_skills = NULL)
    {
        if (!is_null($_skills))
            $this->skills = $_skills;
        return $this->skills;
    }

    function weight($_weight = NULL)
    {
        if (!is_null($_weight))
            $this->weight = $_weight;
        return $this->weight;
    }

    function is_final($_is_final = NULL)
    {
        if (!is_null($_is_final))
            $this->is_final = $_is_final;
        return $this->is_final;
    }

    function is_global_weight($_is_global_weight = NULL)
    {
        if (!is_null($_is_global_weight))
            $this->is_global_weight = $_is_global_weight;
        return $this->is_global_weight;
    }

    function empty()
    {
        if (
            empty($this->skills) &&
            empty($this->weight) &&
            empty($this->is_final) &&
            empty($this->is_global_weight) {
            return true;
        } else {
            return false;
        }
    }

    function equals($_object)
    {
        if (
            $this->skills == $_object->skills() &&
            $this->weight == $_object->weight() &&
            $this->is_final == $_object->is_final() &&
            $this->is_global_weight == $_object->is_global_weight()) {
            return true;
        } else {
            return false;
        }
    }

}

?>
