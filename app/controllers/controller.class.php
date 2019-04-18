<?php
    /**
     * Basic Class to create controllers
     */
    class Controller {
        protected $model, $view;
        /**
         * Loads model
         * @return void
         */
        protected function loadModel() {
            require_once __DIR__ . '\..\models/' . $_GET['page'] . 'Model.class.php';
        }
        /**
         * Loads view and shows it
         * @param Model $data
         * @return void
         */
        protected function loadView(\Model $model) {
            require_once __DIR__ . '\..\views/' . $_GET['page'] . 'View.phtml';
        }
    }
?>