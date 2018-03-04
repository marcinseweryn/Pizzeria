<?php
require_once dirname(__FILE__).'/../DAO/OrderProductDAO.php';

class OrderProductService{
    
    private $orderProductDAO;

    public function __construct(){
        $this->orderProductDAO = new OrderProductDAO();
    }
    
    public function findOrderProductDetailsByOrderID($orderID){
        
        $orderProducts = $this->orderProductDAO->findOrderProductDetailsByOrderID($orderID);
        if($orderProducts != NULL){
            foreach($orderProducts as $orderProduct){
                if($orderProduct["size"] === "S"){
                    $orderProduct["price"] =   $orderProduct["price"] * 0.7;
                }else if($orderProduct["size"] === "L"){
                    $orderProduct["price"] =   $orderProduct["price"] * 1.3;
                }
                $orderProducts2[] = $orderProduct; 
            }
            
            return $orderProducts2;
        }
        
        return NULL;
    }
    
}