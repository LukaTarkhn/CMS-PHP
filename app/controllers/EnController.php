<?php

namespace app\controllers;

use ibuild\Cache;

class EnController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');

        $this->setMeta(
            'Real Palace – Construction company',
            'utf-8',
            'REAL PALACE is the largest construction company in Georgia. It was founded in 1989 and shortly moved to the leading position in the construction sector of the country, currently maintaining this position with dignity. ',
            'black sea towers, construction, constructor, investment,Georgia, sakartvelo, vila, villa, cottage,buildings, building, hotel, hotels, industrial, individual, residential, leader, leader of the branch, mechanisation, mechanization, Technic, construction site, concrete, project, project design, quality, quality control, technology, construction materials, Caucasus, post soviet, post-soviet, postsoviet, Tbilisi, Batumi, multi-store, multi-store building, reinforced concrete, carcass, monolith, monolithic, finishing, facade, transport, modern',
            'lukatarkhnishvili.com'
        );

        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers'));

        setcookie('languages', 'EN', time() + 3600 * 24, '/');
    }

    public function  conditionAction() {
        $this->setMeta('Real Palace Black Sea Towers APARTMENT HANDOVER CONDITIONS', 'utf-8','APARTMENT HANDOVER CONDITIONS', 'condition, white carcase', 'lukatarkhnishvili.com');
    }

}