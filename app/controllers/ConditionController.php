<?php


namespace app\controllers;


class ConditionController extends AppController
{
    public function  indexAction() {
        $lang = \ibuild\App::$app->getProperty('language');
        if ($lang['code'] === 'RU') {
            $this->setMeta('Real Palace Black Sea Towers УСЛОВИЯ СДАЧИ АПАРТАМЕНТОВ', 'utf-8','УСЛОВИЯ СДАЧИ АПАРТАМЕНТОВ', 'УСЛОВИЯ, СДАЧИ, АПАРТАМЕНТОВ', 'lukatarkhnishvili.com');
        } elseif ($lang['code'] === 'EN') {
            $this->setMeta('Real Palace Black Sea Towers APARTMENT HANDOVER CONDITIONS', 'utf-8','APARTMENT HANDOVER CONDITIONS', 'condition, white carcase', 'lukatarkhnishvili.com');
        } else {
            $this->setMeta('Real Palace Black Sea Towers აპარტამენტების ჩაბარების კონდიცია', 'utf-8','აპარტამენტების ჩაბარების კონდიცია', 'ჩაბარება, აპარტამენტები, კონდიცია, თეთრი კარკასი, რემონტით', 'lukatarkhnishvili.com');
        }

    }
}