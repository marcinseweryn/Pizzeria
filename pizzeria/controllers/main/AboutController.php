<?php

class AboutController{
    
    public function generateView(){
        
        getSmarty()->display(getConf()->root_path.'/views/main/about.html');
    }
}