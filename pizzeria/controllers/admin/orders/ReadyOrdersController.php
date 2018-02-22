<?php

class ReadyOrdersController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/ready-orders.html');
    }
}