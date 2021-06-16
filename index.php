<?php


// LOAD CONFIG
$config = parse_ini_file('app.ini');
// DISPLAY ERRORS FROM CONFIG SETTINGS
if($config['mode'] == 'development'){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);   
}else if($config['mode'] == 'production'){
    error_reporting(0);
}else{
    $_SESSION['error_handler_template'] = [ 
        "header" => "Unknown mode",
        "text" => "Allowed modes [ development , production ] ",
        "file" => "app.ini",
        "line" => __LINE__
    ];
    if($_GET['url'] !== "ErrorPage") header("Location: ErrorPage");
}

// SHOW LOAD TIME WHEN MODE = DEVELOPMENT ( CONSOLE LOG )
if($config['show_loadtime']){
    echo '
    <script type="text/javascript">
        var timerStart = Date.now();
    </script>';
}

// REQUIRE FILES  { MODAL / CONTROLLER / VIEW } OPTIONAL { HEAD / NAV}
if(isset($config['use_head']) && file_exists("Components/{$config['use_head']}.php")) {
    require_once "Components/{$config['use_head']}.php";
}
if(isset($config['use_nav']) && file_exists("Components/{$config['use_nav']}.php")) require_once "Components/{$config['use_nav']}.php";
    spl_autoload_register(function ($class_name) {
    if (file_exists('Model/'.$class_name.'.php')) {
        require_once 'Model/'.$class_name.'.php';
    } elseif (file_exists('Controller/'.$class_name.'.php')) {
        require_once 'Controller/'.$class_name.'.php';
    }
});

require_once 'Routes.php';
