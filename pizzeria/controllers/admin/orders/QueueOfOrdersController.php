<?php

class QueueOfOrdersController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/orders/queue-of-orders.html');
    }
}