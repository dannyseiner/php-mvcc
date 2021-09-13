<?php
if (session_status() === PHP_SESSION_NONE) session_start();

Route::set($_GET['url'], function () {
    ucfirst($_GET['url'])::CreateView(ucfirst($_GET['url']));
});
