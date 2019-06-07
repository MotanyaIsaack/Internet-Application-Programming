<?php
    include_once "../../../DBConnector.php";
    class ApiHandler{
        private $meal_name;
        private $meal_units;
        private $unit_price;
        private $status;
        private $user_api_key;
        private $order_id;

        public function setMealName($meal_name){
            $this->meal_name = $meal_name;
        }
        
        public function getMealName()
        {
            return $this->meal_name;
        }
        public function setMealUnits($meal_units){
            $this->meal_units = $meal_units;
        }
        
        public function getMealUnits()
        {
            return $this->meal_units;
        }
        public function setUnitPrice($unit_price){
            $this->unit_price = $unit_price;
        }
        
        public function getUnitPrice()
        {
            return $this->unit_price;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        
        public function getStatus()
        {
            return $this->status;
        }
        public function setUserApiKey($key){
            $this->user_api_key = $key;
        }
        
        public function getUserApiKey()
        {
            return $this->user_api_key;
        }
        public function setOrderId($order_id){
            $this->order_id = $order_id;
        }
        
        public function getOrderId()
        {
            return $this->order_id;
        }

        public function createOrder()
        {
            $conn = new DBConnector();
            $sql = "INSERT INTO orders(order_name,units,unit_price,order_status)
                     VALUES('$this->meal_name','$this->meal_units','$this->unit_price','$this->status')";
            $res = $conn->getConnection()->query($sql) or die("Error:".$conn->getConnection()->error);
           
            return $res;
        }
        public function checkOrderStatus(){
            $conn = new DBConnector();
            $sql = "SELECT order_status FROM orders WHERE order_id = '$this->order_id'";
            $res = $conn->getConnection()->query($sql) or die("Error:".$conn->getConnection()->error);
            if ($res->num_rows <= 0) {
                return false;
            }else{
              while($row = $res->fetch_array()){
                $order_status = $row['order_status'];
              }
              // $_SESSION['api_key'] = $api_key;
              return $order_status;
            }
        }
        public function fetchAllOrders()
        {
            
        }
        public function checkApiKey()
        {
            // $conn = new DBConnector();
            // $api_key = $this->getUserApiKey();
            // $sql = "SELECT * FROM api_keys where api_key = '$api_key'";
            // $res = $conn->getConnection()->query($sql);
            // if($res->num_rows > 0){
            //     return true;
            // }
            // return false;
            return true;
        }
        public function checkContentType(){
            
        }
    }

?>