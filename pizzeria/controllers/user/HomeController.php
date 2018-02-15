<?php

class HomeController{
    
    public function generateView(){
        
        getSmarty()->display(getConf()->root_path.'/views/user/home.html');
    }
}