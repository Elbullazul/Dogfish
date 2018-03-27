<?php

abstract class label_manager
{
    static $locale = 'en_us';

    static function get_label($_label)
    {

        $text = "";
        $file = 'Labels/xml/' . self::$locale . '.xml';
        $xml = simplexml_load_file($file);

        foreach ($xml as $node) {
            if ($node->key == $_label) {
                $text = $node->text;
                break;
            }
        }

        return $text;
    }

    // get user browsing language
    static function get_locale()
    {
        return strtolower(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']));
    }

    static function set_locale()
    {
        $current_locale = self::get_locale();
        if (file_exists('Labels/xml/' . $current_locale . '.xml')) {
            self::$locale = $current_locale;
        }
    }
}

?>
