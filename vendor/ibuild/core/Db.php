<?php
namespace ibuild;

class Db {
    use TSingeltone;
    

    protected function __construct() {
        $db = require_once CONF . '/config_db.php';
    }
}