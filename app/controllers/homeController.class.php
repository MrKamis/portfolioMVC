<?php
    require_once __DIR__ . '\controller.class.php';
    class HomeController extends Controller {
        public function __construct() {
            $this->loadModel();
            $this->model = new HomeModel();
            $this->loadView($this->model);
        }
    }
?>