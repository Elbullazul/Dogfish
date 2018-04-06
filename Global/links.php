<?php

abstract class links
{
    static function get_link($_view) {
        $path = "";
        $file = 'Resources/xml/links/ws-links.xml';
        $xml = simplexml_load_file($file);

        foreach ($xml as $node) {
            if ($node->key == $_view) {
                $path = $node->path;
                break;
            }
        }

        return $path;
    }
}

?>
