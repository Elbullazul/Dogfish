<?php

namespace utils;

abstract class path_util
{
    static function build($_dir, $_file)
    {
        return $_dir . '\\' . $_file;
    }

    static function resource($_path)
    {
        return '/Resources/' . $_path;
    }
}

?>
