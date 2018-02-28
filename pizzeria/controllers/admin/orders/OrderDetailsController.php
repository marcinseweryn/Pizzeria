<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../../DAO/OrderProductDAO.php';
require_once dirname(__FILE__).'/../../../DAO/UserDAO.php';

class OrderDetailsController{
    
    private $orderProductDAO;
    private $orderDAO;
    private $userDAO;
    
    public function __construct(){
        $this->orderProductDAO = new OrderProductDAO();
        $this->orderDAO = new OrderDAO();
        $this->userDAO = new UserDAO();
    }
    
    public function generateView(){
    
        $order = $this->orderDAO->findOrderByOrderID(getFromPost("orderID", true));      
        $user = $this->userDAO->findUserByID($order->userID);
        $orderProductsDetails = $this->orderProductDAO->findOrderProductDetailsByOrderID($order->orderID);
        $sum = 0;
        
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails); 
        getSmarty()->assign('order',$order); 
        getSmarty()->assign('user',$user); 
        getSmarty()->assign('sum',$sum); 
        getSmarty()->assign('from',getFromPost("from", true)); 
        
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/order-details.html');
    }
    
    public function action(){
        $state = getFromPost("state", true);
        $orderID = getFromPost("orderID", true);
        $from = getFromPost("from",true);
        $this->orderDAO->updateOrderStateByOrderID($orderID, $state);
        
        if($from === "waiting"){
            redirectTo("admin/orders/waiting-orders");
        }else if($from === "queue"){
            redirectTo("admin/orders/queue-of-orders");
        }else if($from === "preparing"){
            redirectTo("admin/orders/preparing-orders");
        }else if($from === "ready"){
            redirectTo("admin/orders/ready-orders");
        }else if($from === "sended"){
            redirectTo("admin/orders/sended-orders");
        }
    }
}