<?php

namespace utils;

abstract class get_util
{
    static function set($_key, $_value)
    {
        $_GET[$_key] = htmlentities($_value);
    }

    static function get($_key)
    {
        return isset($_GET[$_key]) ? htmlentities($_GET[$_key]) : "";
    }

    static function get_all()
    {
        return $_GET;
    }

    static function is_set($_key)
    {
        if (get_util::get($_key) != "") {
            return true;
        } else {
            return false;
        }
    }
}

?>
