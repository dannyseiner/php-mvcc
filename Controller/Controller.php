<?php

class Controller extends DB
{
    protected static $data = [];
    protected static $config;
    protected static $class_name;

    public static function CreateView($view_name)
    {
        $_SESSION['class_name'] = $view_name;
        if (method_exists(lcfirst($view_name), '__before')) lcfirst($view_name)::__before();
        self::$class_name = lcfirst($view_name);
        extract(self::$data);
        require_once('Src/php/head.php');
        if (file_exists("./View/$view_name.php")) require_once "./View/$view_name.php";
        if (method_exists(lcfirst($view_name), '__after')) lcfirst($view_name)::__after();
    }
    public static function AddEventListener(string $post_trigger, string $function)
    {
        if (isset($_POST[$post_trigger]) && method_exists(lcfirst($_SESSION['class_name']), $function)) lcfirst($_SESSION['class_name'])::$function();
    }
}
