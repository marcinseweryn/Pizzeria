<?php
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../Service/OrderService.php';

class OrderStatusController{
    
    private $orderDAO;
    private $orderService;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
        $this->orderService = new OrderService();
    }
        
    public function generateView(){
        
        $orders = $this->orderDAO->findOrdersInProgressByUserID(getFromSessionUserID());
        $ordersProducts = $this->orderService->getOrdersArrayOfProductOrdersTables($orders);
        
        getSmarty()->assign('orders',$orders);
        getSmarty()->assign('ordersProducts',$ordersProducts);
        getSmarty()->display(getConf()->root_path.'/views/user/order-status.html');
    }
}