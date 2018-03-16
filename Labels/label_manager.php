<?php

abstract class label_manager {

  static function get_label($_label, $_locale = 'en-us') {

    $text = '';
    $file = 'Labels/xml/'.$_locale.'.xml';
    $xml = simplexml_load_file($file);

    foreach ($xml as $node) {
      if ($node->key == $_label) {
         $text = $node->text;
        break;
      }
    }

    return $text;
  }

}

?>
