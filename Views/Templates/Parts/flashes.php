<?php

$flashes = flash_service::get('flashes');

if (!empty($flashes)) {
    foreach ($flashes as $type => $messages) {
        foreach ($messages as $index => $message) {
            $html = '<div class="alert-'.flash_service::get_name($type).' alert text-center alert-dismissible">';
            $html = $html.labels::get_label($message['text']);

            if ($message['sticky'] == false)
                $html = $html.'<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>';
            $html = $html.'</div>';

            echo $html;
        }
    }
}

?>