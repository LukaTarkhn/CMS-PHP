<?php

namespace app\controllers;

use ibuild\Cache;

class RuController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');
        
        $this->setMeta(
            'Real Palace – Строительная компания',
            'utf-8',
            'REAL PALACE - крупнейшая строительная компания в Грузии, компания «Real Palace» была основана в 2011 году. Приоритетом нашей компании является не только создание достойных и комфортных условий, но и установления долгосрочных партнерских отношений с покупателями.',
            'black sea towers, строительство, строитель, инвестиции, Грузия, отель, сакартвело, вила, вилла, коттедж, здания, здания, гостиницы, гостиницы, промышленные, индивидуальные, жилые, лидер, лидер отрасли, механизация, механизация, техника, строительная площадка, бетон, дизайн, качество, контроль качества, технологии, строительные материалы, Кавказ, постсоветский, постсоветский, постсоветский, Тбилиси, Батуми, многоквартирный магазин, многоквартирный дом, железобетон, каркас, монолит, монолитный, отделочный, фасад, транспорт, современный, REAL PALACE, realpalace.ge',
            'lukatarkhnishvili.com'
        );

        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers'));

        setcookie('languages', 'RU', time() + 3600 * 24, '/');
    }

    public function  conditionAction() {
        $this->setMeta('Real Palace Black Sea Towers УСЛОВИЯ СДАЧИ АПАРТАМЕНТОВ', 'utf-8','УСЛОВИЯ СДАЧИ АПАРТАМЕНТОВ', 'УСЛОВИЯ, СДАЧИ, АПАРТАМЕНТОВ', 'lukatarkhnishvili.com');
    }

}