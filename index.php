<?php

// include class file on instantiation
spl_autoload_register(function ($_class) {
    $directories = array('Controllers', 'Entities', 'Global', 'Models', 'Repositories', 'Core', 'Factories');
    foreach ($directories as $directory) {
        $path = __DIR__ . "/{$directory}/{$_class}.php";

        if (file_exists($path)) {
            require_once $path;
        }
    }
});

$app = new application();

?>
