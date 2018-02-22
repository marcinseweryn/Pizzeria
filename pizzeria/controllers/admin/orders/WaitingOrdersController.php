<?php

class WaitingOrdersController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/waiting-orders.html');
    }
}