<?php

class Controller extends DB
{
    protected static $data = [];
    protected static $config;
    public function __construct()
    {
        self::loadConfig();
    }
    public static function CreateView($view_name)
    {
        self::loadConfig();
        // CALL FUNCTION LOAD DATA IF FUNCTION EXISTS
        if(method_exists(lcfirst($view_name),'LoadData')) lcfirst($view_name)::LoadData();
        extract(self::$data);
        if (file_exists("./View/$view_name.php")) {
            require_once "./View/$view_name.php";
            $config = parse_ini_file('app.ini');
            if(isset($config['use_footer']) && file_exists("Components/{$config['use_footer']}.php")){
                require_once("Components/{$config['use_footer']}.php");
            }
            if($config['show_loadtime'] && $config['mode'] == 'development') {
                echo '
                    <script type="text/javascript">
                        window.onload = function() {
                            console.log("Website load time: ", Date.now()-timerStart+"ms");
                        };
                    </script>';
            }
        }
    }
    public static function loadConfig()
    {
        self::$config = parse_ini_file('app.ini');
    }
}
