<?php

namespace ishop;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if ( !\R::testConnection() ) {
            throw new \Exception("Нет соединения c BD", 403);
        }
        \R::freeze(true);
        if ( DEBUG ) {
            \R::debug(true, 1);
        }
    }

}