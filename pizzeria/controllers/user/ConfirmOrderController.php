<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderProductDAO.php';
require_once dirname(__FILE__).'/../../DAO/UserDAO.php';
require_once dirname(__FILE__).'/../../model/User.php';

class ConfirmOrderController{
    
    private $orderProductDAO;
    private $orderDAO;
    private $userDAO;
    private $productDAO;
    
    public function __construct(){
        $this->orderProductDAO = new OrderProductDAO();
        $this->orderDAO = new OrderDAO();
        $this->userDAO = new UserDAO();
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
        $userID = getFromSessionUserID();
        $order = $this->orderDAO->findNewOrderByUserID($userID);
        $orderProductsDetails = $this->orderProductDAO->findOrderProductDetailsByOrderID($order->orderID);
        $user = $this->userDAO->findUserByID($userID);    
        
        getSmarty()->assign('user',$user);
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails);
        getSmarty()->assign('product',$this->productDAO->findProductByID(getFromRequest("productID")));
        getSmarty()->assign('sum',0);
        
        getSmarty()->display(getConf()->root_path.'/views/user/confirm-order.html');
    }
    
    
}