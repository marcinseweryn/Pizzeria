<?php

class ProductsController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/products.html');
    }
}