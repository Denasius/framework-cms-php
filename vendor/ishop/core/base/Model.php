<?php

namespace vendor\ishop\core\base;
use vendor\ishop\core\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}