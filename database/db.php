<?php
    class Database
    {
        private $con;
        public function connect()
        {
            include_once("constants.php");
            $this->con = new Mysqli(HOST,USER,PASS,DB);
            if ($this->con) {
                echo "Connection succesfull";
                return $this->con;
            }
            return "Database connection failed";
            
        }
    }
    $db = new Database();
    $db->connect();
?>