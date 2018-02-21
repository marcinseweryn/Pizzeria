<?php
require_once dirname(__FILE__).'/../DAO/UserDAO.php';

class UserService{
    
    private $userDAO;
    
    public function __construct(){
        $this->userDAO = new UserDAO(); 
    }
    
    public function checkLoginData(){
        
          
        $users = $this->userDAO->findAllUsers();
          
        foreach ($users as $user){
            if($user->email == getFromRequest("email") && $user->password == getFromRequest("password")){
                
                if ($user->role === "admin"){
                    addRole("admin");
                    
                    return "admin";
                }else{
                    addRole("user");
                    saveToSessionUserID($user->userID);
                    return "user";
                }                 
            }    
        }
        return null;
    }
    
}