<?php
    require_once __DIR__ . '/controller.class.php';
    class AboutController extends Controller {
        public function __construct() {
            $this->loadModel();
            $this->model = new AboutModel();
            $this->loadView($this->model);
        }
    }
?>