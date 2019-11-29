<?php


namespace app\controllers;


class CurrentController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $current = \R::findOne('current', 'id = ?', [$alias]);
        if(!$current) {
            throw  new \Exception('Page not found', 404);
        }

        $this->setMeta($current->title, 'utf-8', $current->title, $current->title, 'lukatarkhnishvili.com');
        $this->set(compact('current'));
    }
}