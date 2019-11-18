<?php

namespace app\controllers;

use ibuild\Cache;

class MainController extends AppController {
    public function indexAction() {
        $posts = \R::findAll('news');
        $this->setMeta('Home Page', 'descriptions...', 'keyword 1, keyword 2');

        $cache = Cache::instance();
//        $cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $posts);
        }
        $this->set(compact('posts'));
    }
}