<?php
    /**
     * Basic class to create models
     */
    class Model {
        /**
         * @var PDO PDO connection
         */
        protected $conn;
        /**
         * Connects to database
         */
        protected function conntectToDB() {
            require_once __DIR__ . '/../config/database.php';
            $this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $username, $password);
        }
        public function __construct() {
            $this->conntectToDB();
        }
    }
?>