<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';;
require_once dirname(__FILE__).'/../../DAO/UserDAO.php';
require_once dirname(__FILE__).'/../../Service/OrderProductService.php';
require_once dirname(__FILE__).'/../../Service/OrderService.php';
require_once dirname(__FILE__).'/../../model/User.php';

class ConfirmOrderController{
    
    private $orderProductService;
    private $orderService;
    private $orderDAO;
    private $userDAO;
    private $productDAO;
    
    public function __construct(){
        $this->orderProductService = new OrderProductDAO();
        $this->orderService = new OrderService();
        $this->orderDAO = new OrderDAO();
        $this->userDAO = new UserDAO();
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
        $userID = getFromSessionUserID();
        $order = $this->orderDAO->findNewOrderByUserID($userID);
        $orderProductsDetails = $this->orderProductService->findOrderProductDetailsByOrderID($order->orderID);
        $user = $this->userDAO->findUserByID($userID);    
        $sum = $this->orderService->calculateOrderSum($order->orderID);
        
        getSmarty()->assign('user',$user);
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails);
        getSmarty()->assign('product',$this->productDAO->findProductByID(getFromRequest("productID")));
        getSmarty()->assign('sum',$sum);
        
        getSmarty()->display(getConf()->root_path.'/views/user/confirm-order.html');
    }
    
    
}