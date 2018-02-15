<?php

class OrdersController{
    
    public function generateView(){
        
        
        getSmarty()->display(getConf()->root_path.'/views/user/orders.html');

    }
}