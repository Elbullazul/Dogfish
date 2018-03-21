<?php

abstract class label_manager {
  static $locale = 'fr_fr';

  static function get_label($_label) {

    $text = '';
    $file = 'Labels/xml/'.self::$locale.'.xml';
    $xml = simplexml_load_file($file);

    foreach ($xml as $node) {
      if ($node->key == $_label) {
         $text = $node->text;
        break;
      }
    }

    return $text;
  }

  static function get_locale() {
    return strtolower(locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']));
  }
}

?>
