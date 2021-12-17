<?php
if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_GET['url'])) header("Location: index");

Route::set($_GET['url'], function () {
    ucfirst($_GET['url'])::CreateView(ucfirst($_GET['url']));
});
