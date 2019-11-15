<?php

namespace app\controllers;

class MainController extends AppController {
    public function indexAction() {
        $posts = \R::findAll('news');
        debug($posts);
        $this->setMeta('Home Page', 'descriptions...', 'keyword 1, keyword 2');

        $name = 'Luka';
        $age = '25';
        $this->set(compact('name', 'age'));
    }
}