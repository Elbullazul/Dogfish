<?php

namespace utils;

abstract class session_util
{
    static function set($_key, $_value)
    {
        $_SESSION[$_key] = $_value;
    }

    static function get($_key)
    {
        return isset($_SESSION[$_key]) ? $_SESSION[$_key] : "";
    }

    static function destroy($_key)
    {
        if (isset($_SESSION[$_key])) {
            session_util::set($_key, NULL);
            unset($_SESSION[$_key]);
        } else {
            return false;
        }
    }

    static function is_set($_key)
    {
        if (session_util::get($_key) != "") {
            return true;
        } else {
            return false;
        }
    }
}

?>
