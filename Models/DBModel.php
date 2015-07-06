<?php
    class DBModel
    {
        const HOST = "localhost";
        const USER = "bmeze";
        const PASS = "monica";
        const DB = "bmeze";	// numele bazei de date - în cazul acesta - la fel ca username 
        
        private $connection;
        
        public function __construct(){
            $this->connection = new mysqli(
                                    self::HOST, self::USER,
                                    self::PASS, self::DB);
            if($this->connection->connect_error){
                die("Connection ERROR: ".$this->connection->connect_error);
            }
            else{
                echo "Connection OK!";
            }
        }
        
        public function db(){
            return $this->connection;
        }
        
        public function close(){
            $this->connection->close();
        }
    }
    