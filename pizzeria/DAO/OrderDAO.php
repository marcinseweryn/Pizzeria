<?php
require_once dirname(__FILE__).'/../model/Order.php';

class OrderDAO{
    
    public function findOrderByOrderID($orderID){
        
        $record = getDB()->get("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery"
        ], ["order_id" => $orderID]);
        
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
    
    public function createNewOrderByUserID($userID){
       
        getDB()->insert("order", [
            "user_id" => $userID,
            "date" => date('Y-m-d H:i:s'),
            "delivery" => "new",
            "state" => "new"
        ]);   
    }
    
    public function findNewOrderByUserID($userID){
        
        $record = getDB()->get("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery"
        ], ["state" => "new"]);
        
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
        
        getDB()->update("order", [
            "date" => date('Y-m-d H:i:s'),
            "delivery" => $delivery,
            "state" => $state,
        ], ["order_id" => $orderID]);
    }
    
    public function findOrderDetailsByState($state){
        
        $orderProducts = getDB()->select("order",
            ["[><]user" => ["order.user_id" => "user_id"]],[
                "order.order_id",
                "user.surname",
                "order.date",
                "order.delivery"
            ], ["order.state" => $state,
                    "ORDER" => ["order.date" => "ASC"]
            ]);
        
        return $orderProducts;
    }
    
    public function updateOrderStateByOrderID($orderID,$state){
        
        getDB()->update("order", [
            "state" => $state,
        ], ["order_id" => $orderID]);
    }
    
    
}