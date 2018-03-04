<?php
require_once dirname(__FILE__).'/OrderProductService.php';
require_once dirname(__FILE__).'/../DAO/OrderDAO.php';

class OrderService
{
    private $orderProductService;
    private $orderDAO;
    
    public function __construct(){
        $this->orderProductService = new OrderProductService();
        $this->orderDAO = new OrderDAO();
    }
    
    public function getOrdersArrayOfProductOrdersTables($orders){
        if($orders != NULL){
            foreach($orders as $order){
                $orderProducts[] = $order->orderID;
                
                $productsDetails = $this->orderProductService->findOrderProductDetailsByOrderID($order->orderID);
    
                $orderProducts[$order->orderID] = $productsDetails;
            }
            return $orderProducts;
        }else{
            return NULL;
        }
    }
    
    public function updateOrderSumByOrderID($orderID){
        
        $sum = $this->calculateOrderSum($orderID);
        
        $this->orderDAO->updateOrderSumByOrderID($orderID, $sum);
    }
    
    public function calculateOrderSum($orderID){
        
        $productsDetails = $this->orderProductService->findOrderProductDetailsByOrderID($orderID);
        $sum = 0;
        if($productsDetails != NULL){
            foreach($productsDetails as $productDetail){
                $sum = $sum + $productDetail["price"];
            }
            
            return $sum;
        }
        return NULL;
    }
    
    
}

