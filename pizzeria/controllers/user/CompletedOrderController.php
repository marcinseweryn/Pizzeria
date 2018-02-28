<?php
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';

class CompletedOrderController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    public function generateView(){
        
        $delivery;
        if(getFromPost("delivery") === "Yes"){
            $delivery = getFromPost("city")." ".getFromPost("address")." ".getFromPost("postalCode");
        }else{
            $delivery = "Pickup in a pizzeria";
        }
        
        $order = $this->orderDAO->findNewOrderByUserID(getFromSessionUserID());
        $this->orderDAO->updateOrderStateDeliveryByOrderID("waiting", $delivery, $order->orderID);
        
        getSmarty()->display(getConf()->root_path.'/views/user/completed-order.html');
    }
    
}