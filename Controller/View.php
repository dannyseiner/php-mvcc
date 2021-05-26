<?php

class View extends Controller
{
    public static function LoadData()
    {
        // LOAD DATA INTO GLOBAL DATA VARIABLE, DATA WILL BE EXTRACTED
        $load_data = self::query('SELECT * FROM auta');
        self::$data = $load_data[0];
    }
}
// EVENTS
