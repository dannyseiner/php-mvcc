<?php

class Controller extends DB
{
    protected static $data = [];

    public static function CreateView($view_name)
    {
        if(method_exists(lcfirst($view_name),'LoadData')) lcfirst($view_name)::LoadData();

        extract(self::$data);
        if (file_exists("./View/$view_name.php")) {
            require_once "./View/$view_name.php";
        }
    }
}
