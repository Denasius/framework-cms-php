<?php
require dirname( __DIR__) . '/config/init.php';
require dirname(__DIR__) . '/vendor/ishop/core/App.php';
require dirname(__DIR__) . '/vendor/ishop/core/libs/functions.php';
require CONF . '/routes.php';
new \vendor\ishop\core\App();