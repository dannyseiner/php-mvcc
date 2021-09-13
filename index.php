<?php
session_start();
// LOAD CONFIG
spl_autoload_register(function ($class_name) {
    if (file_exists('Model/' . $class_name . '.php')) {
        require_once 'Model/' . $class_name . '.php';
    } elseif (file_exists('Controller/' . $class_name . '.php')) {
        require_once 'Controller/' . $class_name . '.php';
    }
});
require_once "Model/User.php";

require_once 'Routes.php';
