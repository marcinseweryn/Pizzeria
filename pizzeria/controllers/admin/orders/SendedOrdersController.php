<?php

class SendedOrdersController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/sended-orders.html');
    }
}