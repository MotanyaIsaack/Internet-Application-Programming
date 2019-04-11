<?php
    include "crud.php";
    include_once "DBConnector.php";
    class User implements Crud{
        private $user_id;
        private $first_name;
        private $last_name;
        private $city_name;
        private $conn;
        

        // We can use our constructor to initialize our values
        // member variables cannot be instantiated from elsewhere; They private;
        function __construct($first_name,$last_name,$city_name){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->city_name = $city_name;
            $this->conn = new DBConnector();
            // $this->conn = $this->conn->conn;
        }
        
        // user_id setter
        public function setUserId($user_id){
            $this->user_id = $user_id;
        }

        // user_id getter
        public function getUserId(){
            
        }
        // Because we implemented the Crud interface we have to define all the methods
        // otherwise it will run into an error
        // For now we will implement save() and readAll() functions and return null in
        // the other ones
        public function save(){
            $fn = $this->first_name;
            $ln = $this->last_name;
            $city = $this->city_name;
            $sql = "INSERT INTO user(first_name,last_name,user_city)
                     VALUES('$fn','$ln','$city')";
       
            $res = $this->conn->getConnection()->query($sql);
            return $res;
        }
        public function readAll(){
            $sql = "SELECT * FROM user";
            $result = $this->conn->getConnection()->query($sql);

            return $result;
        }
        public function readUnique(){return null;}
        public function search(){return null;}
        public function update(){return null;}
        public function removeOne(){return null;}
        public function removeAll(){return null;}
    }
?>