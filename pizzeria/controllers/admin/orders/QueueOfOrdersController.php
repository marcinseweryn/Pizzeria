<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';

class QueueOfOrdersController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    public function generateView(){        
        
        $orderDetails = $this->orderDAO->findOrderDetailsByState("queue");  
        
        getSmarty()->assign('orderDetails',$orderDetails);   
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/queue-of-orders.html');
    }
    
    public function prepareOrder(){
        
        $this->orderDAO->updateOrderStateByOrderID(getFromPost("orderID",true), "preparing");
        
        redirectTo("admin/orders/queue-of-orders");
    }
    
}