<?php
require_once dirname(__FILE__).'/../../DAO/ProductDAO.php';

class MenuController{
    
    public function generateView(){
        
        getSmarty()->assign('pizzas',ProductDAO::getAllPizzas());
        
        getSmarty()->display(getConf()->root_path.'/views/user/menu.html');
    }
}