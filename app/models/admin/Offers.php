<?php


namespace app\models\admin;


use app\models\AppModel;

class Offers extends  AppModel
{
    public $attributes = [
        'title' => '',
        'sale' => '',
        'text' => '',
    ];
}