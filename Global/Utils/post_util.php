<?php

namespace utils;

abstract class post_util
{
    static function set($_key, $_value)
    {
        $_POST[$_key] = htmlentities($_value);
    }

    static function get($_key)
    {
        return isset($_POST[$_key]) ? htmlentities($_POST[$_key]) : "";
    }

    static function get_all()
    {
        return $_POST;
    }

    static function is_set($_key)
    {
        if (post_util::get($_key) != "") {
            return true;
        } else {
            return false;
        }
    }
}

?>
