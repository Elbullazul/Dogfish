<?php

namespace utils;

abstract class url_util
{
    static function get_url()
    {
        return get_util::get('url');
    }

    static function parse()
    {
        return explode("/", self::get_url());
    }

    static function get_args()
    {
        $args = array();
        $url = get_util::get_all();

        foreach ($url as $key => $value) {
            if ($key != 'url')
                $args[$key] = $value;
        }

        return $args;
    }
}

?>
