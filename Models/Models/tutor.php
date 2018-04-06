<?php

namespace Models;

class tutor extends person {

    private $tutor_id;
    private $title;

    function tutor_id($_tutor_id = NULL)
    {
        if (is_null($_tutor_id))
            $this->tutor_id = $_tutor_id;
        return $this->tutor_id;
    }

    function title($_title = NULL)
    {
        if (is_null($_title))
            $this->title = $_title;
        return $this->title;
    }

    function empty()
    {
        // TODO: Implement empty() method.
    }

    function equals($_object)
    {
        // TODO: Implement equals() method.
    }

    function properties()
    {
        // TODO: Implement properties() method.
    }


}

?>