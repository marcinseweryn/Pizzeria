<?php
require_once dirname(__FILE__).'/../model/Order.php';

class OrderDAO{
    
    public function findOrdersHistory(){
        
        $records = getDB()->select("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery",
            "sum"
        ],  ["OR" => [
                "OR" => [
                    "state" => "completed",
                    "OR" => [
                        "state" => "uncompleted",
                    ]
                ],
            "state" => "reject"
        ]
        ]);
        
        if($records != NULL){
            foreach($records as $record){
                $order = new Order();
                $order->orderID = $record["order_id"];
                $order->userID = $record["user_id"];
                $order->date = $record["date"];
                $order->state = $record["state"];
                $order->delivery = $record["delivery"];
                $order->sum = $record["sum"];
                
                $orders[] = $order;
            
            }
            return $orders;
        }else{
            return NULL;
        }
    }
    
    public function findOrderByOrderID($orderID){
        
        $record = getDB()->get("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery",
            "sum"
        ], ["order_id" => $orderID]);
        
        if($record != NULL){
            $order = new Order();
            $order->orderID = $record["order_id"];
            $order->userID = $record["user_id"];
            $order->date = $record["date"];
            $order->state = $record["state"];
            $order->delivery = $record["delivery"];
            $order->sum = $record["sum"];
            
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
            "state" => "new",
            "sum" => 0
        ]);   
    }
    
    public function findNewOrderByUserID($userID){
        
        $record = getDB()->get("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery",
            "sum"
        ], ["state" => "new"]);
        
        if($record != NULL){
            $order = new Order();
            $order->orderID = $record["order_id"];
            $order->userID = $record["user_id"];
            $order->date = $record["date"];
            $order->state = $record["state"];
            $order->delivery = $record["delivery"];
            $order->sum = $record["sum"];
     
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
                "order.delivery",
                "order.sum"
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
    
    public function findOrdersInProgressByUserID($userID){
        
        $records = getDB()->select("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery",
            "sum"
        ], ["AND" => [
                "OR" => [
                    "state" => "waiting",
                    "OR" => [
                        "state" => "queue",
                        "OR" => [
                            "state" => "preparing",
                            "OR" => [
                                "state" => "ready",
                                "OR" => [
                                    "state" => "sended"
                                ]
                            ]
                        ]
                     ]
                 ],
                "user_id" => $userID
            ]    
        ]);
        
        if($records != NULL){
            foreach ($records as $record){    
                $order = new Order();
                $order->orderID = $record["order_id"];
                $order->userID = $record["user_id"];
                $order->date = $record["date"];
                $order->state = $record["state"];
                $order->delivery = $record["delivery"];
                $order->sum = $record["sum"];
                
                $orders[] = $order;
            }
            
            return $orders;
        }else{
            return NULL;
        }
    }
    
    public function findOrdersHistoryByUserID($userID){
        
        $records = getDB()->select("order", [
            "order_id",
            "user_id",
            "date",
            "state",
            "delivery",
            "sum"
        ], ["AND" => [
            "OR" => [
                "state" => "reject",
                "OR" => [
                    "state" => "uncompleted",
                    "OR" => [
                        "state" => "completed",
                    ]
                ]
            ],
            "user_id" => $userID
        ]
        ]);
        
        if($records != NULL){
            foreach ($records as $record){
                $order = new Order();
                $order->orderID = $record["order_id"];
                $order->userID = $record["user_id"];
                $order->date = $record["date"];
                $order->state = $record["state"];
                $order->delivery = $record["delivery"];
                $order->sum = $record["sum"];
                
                $orders[] = $order;
            }
            
            return $orders;
        }else{
            return NULL;
        }
    }
    
    public function updateOrderSumByOrderID($orderID,$sum){
        
        getDB()->update("order", [
            "sum" => $sum,
        ], ["order_id" => $orderID]);
    }
    
    
}