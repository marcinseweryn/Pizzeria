<?php
require_once dirname(__FILE__).'/../../DAO/UserDAO.php';
require_once dirname(__FILE__).'/../../model/User.php';

class MyAccountController{
    
    private $user;
    private $userDAO;
    
    public function __construct(){
        $this->user = new User();
        $this->userDAO = new UserDAO();
    }
    
    public function generateView(){
        $this->user = $this->userDAO->findUserByID(getFromSessionUserID());
        getSmarty()->assign('user',$this->user); 
        getSmarty()->display(getConf()->root_path.'/views/user/my-account.html');
    }
    
    public function updateUser(){    
        $this->user->name = getFromRequest("name",true);
        $this->user->surname = getFromRequest("surname",true);
        $this->user->password = getFromRequest("password",true);
        $this->user->city = getFromRequest("city",true);
        $this->user->address = getFromRequest("address",true);
        $this->user->postalCode = getFromRequest("postalCode",true);
        $this->user->phone = getFromRequest("phone",true);
        $this->user->email = getFromRequest("email",true);
        $this->user->role = "user";
        
        $this->userDAO->updateUser($this->user);
        
        redirectTo("user/my-account");
    }
}