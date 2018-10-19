<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController
{
    public function indexAction ()
    {
        $names = ['Денис', 'Диана'];
        $posts = \R::findAll('test');
        $this->setMeta('Главная страница', 'Описание главной страницы', '123');
        $cache = Cache::instance();
        $cache->set('test', $names);
        $this->set(compact('posts'));
    }

}