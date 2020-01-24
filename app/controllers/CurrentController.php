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
        $lang = \ibuild\App::$app->getProperty('language');
        if ($lang['code'] === 'RU') {
            $this->setMeta(
                $current->title_rus,
                'utf-8',
                $current->title_rus,
                $current->title_rus,
                'lukatarkhnishvili.com'
            );
        } elseif ($lang['code'] === 'EN') {
            $this->setMeta(
                $current->title_eng,
                'utf-8',
                $current->title_eng,
                $current->title_eng,
                'lukatarkhnishvili.com'
            );
        } else {
            $this->setMeta(
                $current->title_geo,
                'utf-8',
                $current->title_geo,
                $current->title_geo,
                'lukatarkhnishvili.com'
            );
        }
        $this->set(compact('current'));
    }
}