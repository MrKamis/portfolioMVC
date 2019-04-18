<?php
    require_once __DIR__ . '/model.class.php';
    class HomeModel extends Model {
        public function __construct() {
            print_r($this->conn);
        }
    }
?>