<?php
    require_once __DIR__ . '/controller.class.php';
    class SendController extends Controller {
        public function __construct() {
            $data = $_POST;
            $this->loadModel();
            $this->model = new SendModel($data['email'], $data['content']);
            $this->loadView($this->model);
            header('Location: /home');
        }
    }
?>