<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';


class WaitingOrdersController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    public function generateView(){
        
        $orderDetails = $this->orderDAO->findOrderDetailsByState("waiting");
        
        getSmarty()->assign('orderDetails',$orderDetails);
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/waiting-orders.html');
    }
}