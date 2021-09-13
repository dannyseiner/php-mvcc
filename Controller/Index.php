<?php

class Index extends Controller
{
    public static function __before()
    {
        self::AddEventListener("submit", "dosmth");
    }
    public static function dosmth()
    {
        print_r('ahoj');
    }
}
