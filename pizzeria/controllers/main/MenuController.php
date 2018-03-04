<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';

class MenuController{
    
    private $productDAO;
    
    public function __construct(){
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
           
        getSmarty()->assign('pizzas',$this->productDAO->findProductByCategory("pizza"));
        getSmarty()->assign('drinks',$this->productDAO->findProductByCategory("drinks"));
        getSmarty()->assign('fastFoods',$this->productDAO->findProductByCategory("fast food"));
        
        getSmarty()->display(getConf()->root_path.'/views/main/menu.html');
    }
}