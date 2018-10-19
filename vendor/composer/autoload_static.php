<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit421fd3644f70967f3670d6a941d51934
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit421fd3644f70967f3670d6a941d51934::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit421fd3644f70967f3670d6a941d51934::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}