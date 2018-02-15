<?php
require_once dirname(__FILE__).'/../../DAO/UserDAO.php';
require_once dirname(__FILE__).'/../../model/User.php';

class RegistrationController{
    
    private $user;
    
    public function generateView(){
        
        $this->user = new User();

        getSmarty()->assign('user',$this->user); 
        getSmarty()->display(getConf()->root_path.'/views/main/registration.html');
    }
    
    public function registerUser(){     
            
        UserDAO::saveUser($this->user);
        
        redirectTo("login");
    }
}