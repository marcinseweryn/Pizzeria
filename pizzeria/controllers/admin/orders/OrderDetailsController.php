<?php
require_once dirname(__FILE__).'/../../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../../Service/OrderProductService.php';
require_once dirname(__FILE__).'/../../../DAO/UserDAO.php';

class OrderDetailsController{
    
    private $orderProductService;
    private $orderDAO;
    private $userDAO;
    
    public function __construct(){
        $this->orderProductService = new OrderProductService();
        $this->orderDAO = new OrderDAO();
        $this->userDAO = new UserDAO();
    }
    
    public function generateView(){
    
        $order = $this->orderDAO->findOrderByOrderID(getFromPost("orderID", true));      
        $user = $this->userDAO->findUserByID($order->userID);
        $orderProductsDetails = $this->orderProductService->findOrderProductDetailsByOrderID($order->orderID);
        
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails); 
        getSmarty()->assign('order',$order); 
        getSmarty()->assign('user',$user); 
        getSmarty()->assign('from',getFromPost("from", true)); 
        
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/order-details.html');
    }
    
    public function action(){
        
        $from = getFromPost("from",true);
        
        if($from === "history"){
            redirectTo("admin/history");
        }else{
            $state = getFromPost("state", true);
            $orderID = getFromPost("orderID", true);
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
}