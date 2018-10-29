<?php
/**
 * Created by PhpStorm.
 * User: den_k
 * Date: 29.10.2018
 * Time: 11:55
 */

namespace app\controllers;
use app\models\AppModels;
use vendor\ishop\core\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModels();
    }
}