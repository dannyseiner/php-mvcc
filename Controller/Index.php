<?php

class Index extends Controller
{
    public static function LoadData()
    {
        // LOAD DATA INTO GLOBAL DATA VARIABLE, DATA WILL BE EXTRACTED
        self::$data = self::query('SELECT * FROM auta');
    }
}
// EVENTS
