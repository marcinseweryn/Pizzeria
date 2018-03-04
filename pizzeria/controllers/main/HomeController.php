<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';

class HomeController{
    
    private $productDAO;
    
    public function __construct(){
        $this->productDAO = new ProductDAO();
    }
    
    public function generateView(){
        
        getSmarty()->assign('pizzas',$this->productDAO->findAllPizzas());
        getSmarty()->display(getConf()->root_path.'/views/main/home.html');
    }
}