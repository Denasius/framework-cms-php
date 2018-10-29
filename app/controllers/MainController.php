<?php

namespace app\controllers;

use vendor\ishop\core\Cache;
use vendor\ishop\core\Db;

class MainController extends AppController
{
    public function indexAction ()
    {
        $params = [
            'id' => 2
        ];
        $posts = Db::row('SELECT * FROM news WHERE id = :id', $params);
        $this->setMeta("Главная страница", "Описание", "Ключевики");
        $this->set(compact('posts'));
        $names = ['Денис', 'Диана', 'Маргарита'];
        $cache = Cache::instance();
        $data = $cache->get('test');
        if ( !$data ) {
            $cache->set('test', $names);
        }
        debug($data);
    }
}