<?php

namespace app\controllers;

use ibuild\Cache;

class MainController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('about_us');
        $finishedProjects = \R::find('finished_projects');
        $this->setMeta(
            'Real Palace – Construction company',
            'utf-8',
            'descriptions...',
            'keyword 1, keyword 2',
            'lukatarkhnishvili.com'
        );
        $this->set(compact('aboutus', 'finishedProjects'));

    }
}