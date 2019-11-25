<?php


namespace app\controllers\admin;


use app\models\admin\Apartments;
use ibuild\App;

class ApartmentController extends AppController
{
    public function indexAction() {
        $apartments = \R::findAll('apartments');
        $this->setMeta('Apartments');
        $this->set(compact('apartments'));
    }

    public function editAction() {
        if(!empty($_POST)) {
            $id = $this->getRequestID(false);
            $apartments = new Apartments();
            $data = $_POST;
            $apartments->load($data);
            if($apartments->update('apartments', $id)) {
                $apartments = \R::load('apartments', $id);
                \R::store($apartments);
                $_SESSION['success'] = "Edit saved";
                redirect('/admin/apartment');
            }
        }
        $id = $this->getRequestID();
        $apartments = \R::load("apartments", $id);
        $this->setMeta("apartment {$apartments->kvmeter} kv");
        $this->set(compact('apartments'));
    }
}