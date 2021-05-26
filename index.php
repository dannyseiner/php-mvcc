<?php
// LOAD CONFIG
$_SESSION['config'] = parse_ini_file('app.ini');

// DISPLAY ERRORS FROM CONFIG SETTINGS
if($_SESSION['config']['mode'] == 'development'){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);   
}else{
    error_reporting(0);
}



spl_autoload_register(function ($class_name) {
    require_once 'Components/head.php';
    require_once 'Components/nav.php';
    if (file_exists('Model/'.$class_name.'.php')) {
        require_once 'Model/'.$class_name.'.php';
    } elseif (file_exists('Controller/'.$class_name.'.php')) {
        require_once 'Controller/'.$class_name.'.php';
    }
});

require_once 'Routes.php';
require_once 'Components/scripts.php';
