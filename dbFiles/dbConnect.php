<?php
    class db{
        private $username = "Ndung'u";
        private $password = "mwangidanroyndungu";
        private $server = "localhost";
        private $db = "foodproject";
        
        private $conn;
        public function connect(){
            $this->conn = mysqli_connect($this->server,$this->username,$this->password,$this->db);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            else{
                return $this->conn;
            }
        }
        
    }
    
?>