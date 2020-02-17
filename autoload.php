<?php
spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);

    require_once end($parts) . '.php';
});
