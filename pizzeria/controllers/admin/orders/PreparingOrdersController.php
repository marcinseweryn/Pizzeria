<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';

class PreparingOrdersController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    public function generateView(){
        
        $orderDetails = $this->orderDAO->findOrderDetailsByState("preparing");
        
        getSmarty()->assign('orderDetails',$orderDetails);
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/preparing-orders.html');
    }
    
    public function orderReady(){
        
        $this->orderDAO->updateOrderStateByOrderID(getFromPost("orderID",true), "ready");
        
        redirectTo("admin/orders/preparing-orders");  
    }
}