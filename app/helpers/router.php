<?php
    /**
     * This class route to pages
     */
    class Router {
        /**
         * Routes to pages with $_GET request
         * @param array<string> $get $_GET
         * @return void
         */
        public static function route($get) {
            /**
             * Check is set $_GET['page], if not redirect to \home
             */
            if (!isset($get['page'])) {
                header('Location: \home');
                return;
            }
            switch ($get['page']) {
                case 'home':
                    require_once __DIR__ . '\..\controllers/homeController.class.php';
                    $controller = new HomeController();
                    break;
                case 'about':
                    require_once __DIR__ . '\..\controllers/aboutController.class.php';
                    $controller = new AboutController();
                    break;
                case 'send':
                    require_once __DIR__ . '\..\controllers/sendController.class.php';
                    $controller = new SendController();
                    break;
                default:
                    require_once __DIR__ . '\..\controllers/homeController.class.php';
                    $controller = new HomeController();
                    break;
            }
        }
    }
?>