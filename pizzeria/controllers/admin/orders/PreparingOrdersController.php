<?php

class PreparingOrdersController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/preparing-orders.html');
    }
}