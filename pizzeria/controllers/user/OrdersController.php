<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderProductDAO.php';
require_once dirname(__FILE__).'/../../Service/OrderProductService.php';
require_once dirname(__FILE__).'/../../Service/OrderService.php';
require_once dirname(__FILE__).'/../../model/OrderProduct.php';

class OrdersController{
    
    private $orderProductService;
    private $orderDAO;
    private $productDAO;
    private $orderService;
    
    public function __construct(){
        $this->orderProductDAO = new OrderProductDAO();
        $this->orderDAO = new OrderDAO();
        $this->productDAO = new ProductDAO();
        $this->orderService = new OrderService();
        $this->orderProductService = new OrderProductService();
    }
    
    public function generateView(){
        $userID = getFromSessionUserID();
        $order = $this->orderDAO->findNewOrderByUserID($userID);
       
        if($order == NULL){
            $orderProductsDetails = NULL;
            $sum = 0;
        }else{
            $orderProductsDetails = $this->orderProductService->findOrderProductDetailsByOrderID($order->orderID);
            $sum = $this->orderService->calculateOrderSum($order->orderID);
        }
        
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails); 
        getSmarty()->assign('product',$this->productDAO->findProductByID(getFromRequest("productID")));
        getSmarty()->assign('sum',$sum);
        
        getSmarty()->display(getConf()->root_path.'/views/user/orders.html');
    }
    
    public function addToOrder(){
        if(getFromPost("action")==="add"){

            $userID = getFromSessionUserID();            
            $order = $this->orderDAO->findNewOrderByUserID($userID);

            if($order==NULL){
                $this->orderDAO->createNewOrderByUserID($userID);
                $order = $this->orderDAO->findNewOrderByUserID($userID);
            }
            
            $orderProduct = new OrderProduct();
            $orderProduct->orderID = $order->orderID;
            $orderProduct->productID = getFromPost("productID");
            $orderProduct->size = getFromPost("size");
            
            $this->orderProductDAO->addProductToOrderProduct($orderProduct);       
            $this->generateView();
        }else{
            redirectTo("user/menu");
        }  
    }
    
    public function removeFromOrder(){       
        
        $this->orderProductDAO->deleteProductFromOrderProductByProductID(getFromRequest("remove"));
        $this->generateView();
    }
    
    
    public function sendOrder(){

        if(getFromPost("action")==="order"){
            redirectTo("user/order/confirm");
        }else{
            $order = $this->orderDAO->findNewOrderByUserID(getFromSessionUserID());
            $this->orderProductDAO->deleteProductFromOrderProductByOrderID($order->orderID);
            redirectTo("user/menu");
        }
    }
}