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

        $lang = \ibuild\App::$app->getProperty('language');
        if ($lang['code'] === 'RU') {
            $this->setMeta('Real Palace Black Sea Towers апартаменти', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        } elseif ($lang['code'] === 'EN') {
            $this->setMeta('Real Palace Black Sea Towers Apartments', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        } else {
            $this->setMeta('Real Palace Black Sea Towers აპარტამენტები', 'utf-8', $apartment->kvmeter, $apartment->kvmeter, 'lukatarkhnishvili.com');
        }

        $this->set(compact('apartment'));
    }
}