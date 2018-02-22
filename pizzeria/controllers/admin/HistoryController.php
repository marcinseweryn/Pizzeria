<?php

class HistoryController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/history.html');
    }
}