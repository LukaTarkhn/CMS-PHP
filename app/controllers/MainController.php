<?php

namespace app\controllers;

use ibuild\Cache;

class MainController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');

        $this->setMeta(
            'Real Palace – Construction company',
            'utf-8',
            'descriptions...',
            'keyword 1, keyword 2',
            'lukatarkhnishvili.com'
        );
        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks'));

    }
}