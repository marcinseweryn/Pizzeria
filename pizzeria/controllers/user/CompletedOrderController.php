<?php
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../Service/OrderService.php';

class CompletedOrderController{
    
    private $orderDAO;
    private $orderService;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
        $this->orderService = new OrderService();
    }
    
    public function generateView(){
        
        $delivery;
        if(getFromPost("delivery") === "Yes"){
            $delivery = getFromPost("city").", ".getFromPost("address");
        }else{
            $delivery = "Pickup in a pizzeria";
        }
        
        $order = $this->orderDAO->findNewOrderByUserID(getFromSessionUserID());
        $this->orderDAO->updateOrderStateDeliveryByOrderID("waiting", $delivery, $order->orderID);
        $this->orderService->updateOrderSumByOrderID($order->orderID);
        
        getSmarty()->display(getConf()->root_path.'/views/user/completed-order.html');
    }
    
}