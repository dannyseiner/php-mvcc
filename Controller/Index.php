<?php

class Index extends Controller
{
    public static function __before()
    {
        self::AddEventListener("submit", "dosmth");
    }
    public static function dosmth()
    {
        print_r(self::query_once("SELECT * FROM posts WHERE post_id = 1"));
    }
}
