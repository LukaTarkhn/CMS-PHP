<?php


namespace app\controllers\admin;


use app\models\admin\Current;
use ibuild\App;

class CurrentController extends AppController
{
    public function indexAction() {
        $currents = \R::findAll('current');
        $this->setMeta('Current works list');
        $this->set(compact('currents'));
    }

    public function addImageAction() {
        if(isset($_GET['upload'])) {
            if($_POST['name'] == 'single'){
                $wmax = App::$app->getProperty('currentimg_width');
                $hmax = App::$app->getProperty('currentimg_height');
            }
            $name = $_POST['name'];
            $current = new Current();
            $current->uploadImg($name, $wmax, $hmax);
        }
    }

    public function addAction() {
        if(!empty($_POST)) {
            $current = new Current();
            $data = $_POST;
            $current->load($data);
            $current->getImg();
            if($id = $current->save('current')) {
                $_SESSION['success'] = "Current work added";
            }
            redirect();
        }

        $this->setMeta('New current work');
    }

    public function editAction() {

        $current_id = $this->getRequestID();
        $current = \R::load("current", $current_id);
        $this->setMeta("Current work {$current_id}");
        $this->set(compact('current'));
    }

}