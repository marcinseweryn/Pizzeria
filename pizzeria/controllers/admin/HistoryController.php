<?php
require_once dirname(__FILE__).'/../../DAO/OrderDAO.php';

class HistoryController{
    
    private $orderDAO;
    
    public function __construct(){
        $this->orderDAO = new OrderDAO();
    }
    
    
    public function generateView(){
        
        $orders = $this->orderDAO->findOrdersHistory();
    
        getSmarty()->assign('orders',$orders);
        getSmarty()->display(getConf()->root_path.'/views/admin/history.html');
    }
}