<?php

class UserDAO{
    
    public function saveUser( $user){
        
        $user->surname = getFromRequest("surname",true);
        $user->password = getFromRequest("password",true);
        $user->city = getFromRequest("city",true);
        $user->address = getFromRequest("address",true);
        $user->postalCode = getFromRequest("postalCode",true);
        $user->phone = getFromRequest("phone",true);
        $user->email = getFromRequest("email",true);
        
        getDB()->insert("user", [
            "name" => getFromRequest("name",true),
            "surname" => $user->surname,
            "password" => $user->password, 
            "city" => $user->city,
            "address" => $user->address,
            "postal_code" => $user->postalCode,
            "phone" => $user->phone,
            "email" => $user->email,
            "role" => "user",
        ]);
    }
    
    public function getAllUsers(){
        
        $users = getDB()->select("user", [
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
        
        return $users;
    }
    
}