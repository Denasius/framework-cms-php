<?php
/**
 * Created by PhpStorm.
 * User: den_k
 * Date: 18.10.2018
 * Time: 15:06
 */

namespace ishop;


trait TSingletone
{
    private static $instance;

    public static function instance ()
    {
        if ( self::$instance === null ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}