<?php
require_once dirname(__FILE__).'/../DAO/UserDAO.php';

class UserService{
    
    public function checkLoginData(){
        
        $userDAO = new UserDAO();   
        $users = $userDAO->getAllUsers();
          
        foreach ($users as $user){
            if($user["email"] == getFromRequest("email") && $user["password"] == getFromRequest("password")){
                
                if ($user["role"] === "admin"){
                    addRole("admin");
                    return "admin";
                }else{
                    
                    addRole("user");
                    return "user";
                }                 
            }    
        }
        return null;
    }
    
}