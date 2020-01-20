<?php

namespace app\controllers;

use ibuild\Cache;

class MainController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');

        $this->setMeta(
            'Real Palace – Construction company',
            'utf-8',
            'სამშენებლო კომპანია REAL PALACE, ჩვენ ვაშენებთ კორპუსებს ბათუმში და თბილისში, კორპუსების მშენებლობა ყოველთვის ჯდება ვადებში',
            'სამშენებლო კომპანია, სამშენებლო კომპანია ბათუმში, REAL PALACE, realpalace.ge, მშენებარე ბინები ბათუმში',
            'lukatarkhnishvili.com'
        );
        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers'));

    }
}