<?php

class Route
{
    public static $validRoutes = [];
    
    public static function set($route, $function)
    {
        self::isValid($_GET['url']);
        self::$validRoutes[] = $route;
        if ($_GET['url'] == $route) {
            $function->__invoke();
        }
    }

    public static function isValid(string $route)
    {
        // if($route == 'index.php') {
        //     header("Location: index");
        // }
        // if (!file_exists("View/".ucfirst($route).".php")) {
        //     $_SESSION['error_handler_template'] = [ 
        //         "header" => "Site doesnt exists",
        //         "code" => 404,
        //         "text" => "This website doesn't exists ",
        //         "file" => $route,
        //         "line" => "NULL"
        //     ];
        //     header('Location: ErrorPage');
        // }
    }
}
