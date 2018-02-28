<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';

class SendedOrdersController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    public function generateView(){
        
        $orderDetails = $this->orderDAO->findOrderDetailsByState("sended");
        
        getSmarty()->assign('orderDetails',$orderDetails);
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/sended-orders.html');
    }
    
    public function action(){
        
        $orderID = substr(getFromPost("orderID",true), 1);
        $action = substr(getFromPost("orderID",true), 0, 1);
        
        if($action === "U"){
            $this->orderDAO->updateOrderStateByOrderID($orderID, "uncompleted");
        }else if ($action === "C"){
            $this->orderDAO->updateOrderStateByOrderID($orderID, "completed");
        }
        
        redirectTo("admin/orders/sended-orders");
    }
}