<?php

class GalleryController{
    
    public function generateView(){
        
        getSmarty()->display(getConf()->root_path.'/views/main/gallery.html');
    }
}