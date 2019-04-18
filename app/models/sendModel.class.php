<?php
    require_once __DIR__ . '\model.class.php';
    class SendModel extends Model {
        public $state = true;
        /**
         * Sends data to database
         * @param string $from Email
         * @param string $content Content of message
         * @return bool
         */
        private function sendToDatabase($from, $content) {
            $query = $this->conn->prepare('INSERT INTO messages(email, content) VALUES(?, ?)');
            $query->bindParam(1, $from);
            $query->bindParam(2, $content);
            return $query->execute();
        }
        public function __construct($from, $content) {
            parent::__construct();
            if ($this->sendToDatabase($from, $content)) {
                $this->state = true;
            } else {
                $this->state = false;
            }
        }
    }
?>