<?php
require_once dirname(__FILE__).'/../model/Order.php';

class OrderDAO{
    
    
    public function createNewOrderByUserID($userID){
       
        getDB()->insert("order", [
            "user_id" => $userID,
            "date" => date('Y-m-d H:i:s'),
            "delivery" => "uncompleted",
            "state" => "uncompleted"
        ]);   
    }
    
    public function findUncompletedOrderByUserID($userID){
        
        $record = getDB()->get("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery"
        ], ["state" => "uncompleted"]);
        
        if($record != NULL){
            $order = new Order();
            $order->orderID = $record["order_id"];
            $order->userID = $record["user_id"];
            $order->date = $record["date"];
            $order->state = $record["state"];
            $order->delivery = $record["delivery"];
     
             return $order;
        }else{
            return NULL;
        }
    }
    
    public function updateOrderStateDeliveryByOrderID($state, $delivery, $orderID){
        
        $record = getDB()->update("order", [
            "date" => date('Y-m-d H:i:s'),
            "delivery" => $delivery,
            "state" => $state,
        ], ["order_id" => $orderID]);
    }
    
    
}