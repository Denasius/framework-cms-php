<?php
/**
 * Created by PhpStorm.
 * User: den_k
 * Date: 18.10.2018
 * Time: 15:05
 */

namespace ishop;


class Registry
{
    use TSingletone;
    public static $properties = [];

    public function setProperty ($name, $value)
    {
        self::$properties[$name] = $value;

    }

    public function getProperty ($name)
    {
        if ( isset(self::$properties[$name]) ) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}