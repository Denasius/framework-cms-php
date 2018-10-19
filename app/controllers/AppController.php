<?php

namespace app\controllers;


use app\models\AppModels;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModels();
    }
}