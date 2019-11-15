<?php

namespace ibuild\base;

use ibuild\Db;

class Model {

    public $attributes = [];
    public $errors = [];
    public $rules =[];

    public function __construct() {
        Db::instance();
    }
}