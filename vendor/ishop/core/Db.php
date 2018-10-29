<?php

namespace vendor\ishop\core;
use PDO;


class Db
{
    use TSingletone;

    protected static $database;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        self::$database = new PDO($db['dsn'], $db['user'], $db['password']);
        if (!self::$database){
            throw new \Exception("Нет соединения с БД", 500);
        }
    }

    public static function query ($sql, $params = [])
    {
        $stmt = self::$database->prepare($sql);
        if ( !empty( $params ) ) {
            foreach ( $params as $k => $v ) {
                $stmt->bindValue(":{$k}", $v);
            }
        }
        $stmt->execute();
        return $stmt;
    }

    public static function row ( $sql, $params = [] )
    {
        $result = self::query( $sql, $params );
        return $result->fetchAll( PDO::FETCH_ASSOC );
    }

    public static function column ( $sql, $params = [] )
    {
        $result = self::query( $sql, $params );
        return $result->fetchColumn();
    }
}