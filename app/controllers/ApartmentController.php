<?php


namespace app\controllers;


class ApartmentController extends AppController
{
    public function  viewAction() {
        $alias = $this->route['id'];
        $apartment = \R::findOne('apartments', 'id = ?', [$alias]);
        if(!$apartment) {
            throw  new \Exception('Page not found', 404);
        }

        $this->setMeta('Real Palace Black Sea Towers Apartments', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        $this->set(compact('apartment'));
    }
}