<?php

class DB
{
    protected static $config;
    private static function con()
    {
        $config = parse_ini_file('app.ini');
        $pdo = new PDO("mysql:host={$config['DB_HOST']};dbname={$config["DB_NAME"]};charset=utf8", $config['DB_USER'], $config["DB_PASSWORD"]);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    public static function query(string $query, $params = array())
    {

        function once(string $query): array
        {
            $requrest_queqry = self::query($query);
            return count($requrest_queqry) == 0 ? [] : $requrest_queqry[0];
        }
        $stmt = self::con()->prepare($query);
        $stmt->execute($params);
        $data = $stmt->fetchAll();
        return $data;
    }
}
