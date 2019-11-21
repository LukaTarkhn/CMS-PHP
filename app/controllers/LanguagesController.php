<?php


namespace app\controllers;


class LanguagesController extends AppController
{

    public  function changeAction() {
        $languages = !empty($_GET['lang']) ? $_GET['lang'] : null;
        if ($languages) {
            $lang = \R::findOne('languages', 'code = ?', [$languages]);
            if(!empty($lang)) {
                setcookie('languages', $languages, time() + 3600 * 24, '/');
            }
        }
        redirect();
    }

}