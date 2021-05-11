<?php
class Controller extends DB
{
  // CONSTRUCTOR
  public static function CreateView($view_name)
  {
    if (file_exists("./View/$view_name.php")) {
      require_once("./View/$view_name.php");
    }
  }
  // SESSION CONTROL
  public static function SessionExist(String $name)
  {
    return isset($_SESSION[$name]);
  }
}