<?php
require_once dirname(__FILE__).'/../model/User.php';
class UserDAO{
    
    public function saveUser($user){
     
        getDB()->insert("user", [
            "name" => $user->name,
            "surname" => $user->surname,
            "password" => $user->password, 
            "city" => $user->city,
            "address" => $user->address,
            "postal_code" => $user->postalCode,
            "phone" => $user->phone,
            "email" => $user->email,
            "role" => $user->role,
        ]);
    }
    
    public function findAllUsers(){
        
        $records = getDB()->select("user", [
            "user_id",
            "name",
            "surname",
            "password",
            "city",
            "address",
            "postal_code",
            "email",
            "phone",
            "role",
        ]);
        
        if($records != NULL){
            $users = [];     
            foreach ($records as $record){
                $user = new User();
                $user->userID = $record["user_id"];
                $user->name = $record["name"];
                $user->surname = $record["surname"];
                $user->password = $record["password"];
                $user->city = $record["city"];
                $user->address = $record["address"];
                $user->postalCode = $record["postal_code"];
                $user->email = $record["email"];
                $user->phone = $record["phone"];
                $user->role = $record["role"];
                
                $users[] = $user;
            }
            
            return $users;
        }else{
            return NULL;
        }
    }
    
    public function findUserByID($userID){
        
        $record = getDB()->get("user", [
            "user_id",
            "name",
            "surname",
            "password",
            "city",
            "address",
            "postal_code",
            "email",
            "phone",
            "role",
        ] ,["user_id" => $userID]);
        
        if($record != NULL){
            $user = new User();
            $user->userID = $record["user_id"];
            $user->name = $record["name"];
            $user->surname = $record["surname"];
            $user->password = $record["password"];
            $user->city = $record["city"];
            $user->address = $record["address"];
            $user->postalCode = $record["postal_code"];
            $user->email = $record["email"];
            $user->phone = $record["phone"];
            $user->role = $record["role"];
            
            return $user;
        }else{
            return NULL;
        }
    }
    
}