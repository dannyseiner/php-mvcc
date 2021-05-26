<?php

class Index extends Controller
{
    public static function loadData()
    {
        // LOAD DATA INTO GLOBAL DATA VARIABLE, DATA WILL BE EXTRACTED
        self::$data = self::query('SELECT * FROM auta');
    }
}
// DATA LOADER
Index::loadData();
// EVENTS
