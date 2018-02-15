<?php
require_once dirname(__FILE__).'/../../model/User.php';
require_once dirname(__FILE__).'/../../service/UserService.php';

class LoginController{
    
    private $user;
    
    public function generateView(){
        
        $this->user = new User();
        
        getSmarty()->assign('user',$this->user);         
        getSmarty()->display(getConf()->root_path.'/views/main/login.html');
    }
    
    public function loginToPizzeria(){
        
        $userService = new UserService();
        
        if($userService->checkLoginData()=== "user"){
            redirectTo("user/home");
        }else{
            redirectTo("login");
        }
        
    }
    
    public function logoff(){
        session_destroy();
        session_start();
        redirectTo("home");
    }
}