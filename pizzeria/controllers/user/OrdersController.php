<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';
require_once dirname(__FILE__).'/../../DAO/OrderProductDAO.php';
require_once dirname(__FILE__).'/../../model/OrderProduct.php';

class OrdersController{
    
    private $orderProductDAO;
    private $orderDAO;
    private $productDAO;
    
    public function __construct(){
        $this->orderProductDAO = new OrderProductDAO();
        $this->orderDAO = new OrderDAO();
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
        $userID = getFromSessionUserID();
        $order = $this->orderDAO->findUncompletedOrderByUserID($userID);
        $orderProductsDetails = $this->orderProductDAO->findOrderProductDetailsByOrderID($order->orderID);
        
        getSmarty()->assign('orderProductsDetails',$orderProductsDetails); 
        getSmarty()->assign('product',$this->productDAO->findProductByID(getFromRequest("productID")));
        getSmarty()->assign('sum',0);
        
        getSmarty()->display(getConf()->root_path.'/views/user/orders.html');
    }
    
    public function addToOrder(){
        if(getFromPost("action")==="add"){

            $userID = getFromSessionUserID();            
            $order = $this->orderDAO->findUncompletedOrderByUserID($userID);

            if($order==NULL){
                $this->orderDAO->createNewOrderByUserID($userID);
                $order = $this->orderDAO->findUncompletedOrderByUserID($userID);
            }
            
            $orderProduct = new OrderProduct();
            $orderProduct->orderID = $order->orderID;
            $orderProduct->productID = getFromPost("productID");
            $orderProduct->size = getFromPost("size");
            
            $this->orderProductDAO->addProductToOrderProduct($orderProduct);       
            $this->generateView();
        }else{
            forwardTo("user/menu");
        }  
    }
    
    public function removeFromOrder(){       
        
        $this->orderProductDAO->deleteProductFromOrderProductByProductID(getFromRequest("remove"));
        $this->generateView();
    }
    
    
    public function sendOrder(){

        if(getFromPost("action")==="order"){
            forwardTo("user/order/confirm");
        }else{
            $order = $this->orderDAO->findUncompletedOrderByUserID(getFromSessionUserID());
            $this->orderProductDAO->deleteProductFromOrderProductByOrderID($order->orderID);
            forwardTo("user/menu");
        }
    }
}