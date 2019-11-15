<?php

namespace app\controllers;

class MainController extends AppController {
    public function indexAction() {
        $this->setMeta('Home Page', 'descriptions...', 'keyword 1, keyword 2');

        $name = 'Luka';
        $age = '25';
        $names = ['Luka', 'Lea'];
        $this->set(compact('name', 'age', 'names'));
    }
}