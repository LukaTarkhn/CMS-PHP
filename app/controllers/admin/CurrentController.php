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

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $current = new Current();
            $data = $_POST;
            $current->load($data);
            $current->getImg();
            if($current->update('current', $id)) {
                $current = \R::load('current', $id);
                \R::store($current);
                $_SESSION['success'] = "Edit saved";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $current = \R::load("current", $id);
        $this->setMeta("Current work {$current->title_geo}");
        $this->set(compact('current'));
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        \R::exec("DELETE FROM current WHERE id = ?", [$id]);
        redirect();
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
}