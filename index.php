<?php
spl_autoload_register(function ($class_name) {
  require_once('Components/head.php');
  if (file_exists('Model/' . $class_name . '.php')) {
    require_once('Model/' . $class_name . '.php');
  } else if (file_exists('Controller/' . $class_name . '.php')) {
    require_once('Controller/' . $class_name . '.php');
  }
  require_once('Components/footer.php');
  require_once('Components/scripts.php');
  
});
require_once('Routes.php');
