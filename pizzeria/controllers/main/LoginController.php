<?php
require_once dirname(__FILE__).'/../../model/User.php';
require_once dirname(__FILE__).'/../../service/UserService.php';

class LoginController{
    
    private $user;
    private $userService;
    
    public function __construct(){
        $this->user = new User();
        $this->userService = new UserService();
    }
    
    public function generateView(){  
        
        getSmarty()->assign('user',$this->user);         
        getSmarty()->display(getConf()->root_path.'/views/main/login.html');
    }
    
    public function loginToPizzeria(){
    
        $role = $this->userService->checkLoginData();
        
        if($role === "user"){
            redirectTo("user/home");
        }else if($role === "admin"){
            redirectTo("admin/home");
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