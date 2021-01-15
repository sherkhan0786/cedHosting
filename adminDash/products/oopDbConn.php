<?php
    class Dbcon{
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $dbname = "CedHosting";
        public $conn;

        public function __construct(){
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
        }

        public function getConnection() {
            return $this->conn;
        }
    }

    // $myobj = new Dbcon();
    // echo $myobj->getConnection();

?>