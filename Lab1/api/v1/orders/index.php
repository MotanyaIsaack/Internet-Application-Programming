<?php
    include_once 'ApiHandler.php';
    include_once '../../../DBConnector.php';

    $api = new ApiHandler();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //Check Api From The Header
        $api_key_correct = false;
        $headers = apache_request_headers();
        $header_api_key = $headers['Authorization'];
        $api->setUserApiKey($header_api_key);
        $api_key_correct = $api->checkApiKey();
        // die($api_key_correct);
        if($api_key_correct){
            //We are creating an order
            $name_of_food = $_POST['name_of_food'];
            $number_of_units = $_POST['number_of_units'];
            $unit_price = $_POST['unit_price'];
            $order_status = $_POST['order_status'];

            $conn = new DBConnector();

            $api->setMealName($name_of_food);
            $api->setMealUnits($number_of_units);
            $api->setUnitPrice($unit_price);
            $api->setStatus($order_status);
            $res = $api->createOrder();
            if($res){
                //Create JSON and Respond
                $response_array = ['success' => 1,'message'=>'Order has been placed'];
                header('Content-type: application/json');
                echo json_encode($response_array);
            }
        }else{
            $response_array = ['success'=>0,'message'=>'Wrong API Key'];
            header('Content-type: application/json');
            echo json_encode($response_array);
        }
    }elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
        //For retrieving order status
        $order_id = $_GET['order_id'];
        $api->setOrderId($order_id);
        $res = $api->checkOrderStatus();
        if($res === FALSE){
            $response_array = ['success'=>0,'message'=>'Wrong Order ID'];
            header('Content-type: application/json');
            echo json_encode($response_array);
        }else{
            $response_array = ['success' => 1,'message'=>'Order Status: '.$res];
            header('Content-type: application/json');
            echo json_encode($response_array);
        }
    }else{
        //Sorry we are not supporting this for now

    }


?>


