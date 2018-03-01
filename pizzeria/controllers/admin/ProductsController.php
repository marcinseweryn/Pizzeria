<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';
require_once dirname(__FILE__).'/../../model/Product.php';

class ProductsController{
    
    private $productDAO;
    
    public function __construct(){
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
        
        $products = $this->productDAO->findAllProducts();
    
        getSmarty()->assign('products',$products);
        getSmarty()->display(getConf()->root_path.'/views/admin/products.html');
    }
    
    public function action(){
        
        $product = new Product();
        $product->name = getFromPost("name");
        $product->category = getFromPost("category");
        $product->description = getFromPost("description");
        $product->price = getFromPost("price");
        
        $action = getFromPost("action");
        
        if($action === "create"){
            $this->productDAO->createProduct($product);
        }else{   
            $productID = substr($action, 1);
            $action = substr($action, 0, 1);
            $product->productID = $productID;
            
            if($action === "D"){
                $this->productDAO->deleteProductByID($productID);
            }else if($action === "U"){
                $this->productDAO->updateProduct($product);
            }
        }   
        
        redirectTo("admin/products");
    }
}