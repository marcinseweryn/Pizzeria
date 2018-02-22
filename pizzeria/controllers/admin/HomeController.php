<?php

class HomeController{
    
    public function generateView(){
    
        getSmarty()->display(getConf()->root_path.'/views/admin/home.html');
    }
}