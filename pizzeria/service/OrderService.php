<?php
require_once dirname(__FILE__).'/../DAO/OrderProductDAO.php';

class OrderService
{
    
    public function getOrdersArrayOfProductOrdersTables($orders){
        
        $orderProductDAO = new OrderProductDAO();
        foreach($orders as $order){
            $orderProducts[] = $order->orderID;
            
            $productsDetails = $orderProductDAO->findOrderProductDetailsByOrderID($order->orderID);
            
                
                $orderProducts[$order->orderID] = $productsDetails;
            
        }

        return $orderProducts;
    }
    
    
}

