<?php
// SESSION START
session_start();

// IF URL DOENST EXIST
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$get_file = explode('/',$full_url);
$get_file_index = $get_file[count($get_file)-1];
$_SESSION['file_index'] = $get_file_index;
if(!file_exists('View/' . $get_file_index . '.php') == 1 && $get_file_index != 'request'){
  require_once("View/ErrorPage.php");
}
// INDEX
Route::set('index', function () {
  Index::CreateView("Index");
});