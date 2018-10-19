<?php
/**
 * Created by PhpStorm.
 * User: den_k
 * Date: 19.10.2018
 * Time: 10:44
 */

namespace ishop\base;


abstract class Controller
{
    public $route;
    public $layout;
    public $controller;
    public $prefix;
    public $model;
    public $view;
    public $data = [];
    public $meta = ['title' => '', 'desc' => '', 'keywords' => ''];

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
        $this->model = $route['controller'];
    }

    public function getView ()
    {
        $viewObgect = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObgect->render( $this->data );
    }

    public function set ( $data )
    {
        $this->data = $data;
    }

    public function setMeta ($title = '', $desc = '', $keywords = '')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }
}