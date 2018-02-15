<?php

class ProductDAO{ 
    
    function getAllPizzas(){
        
        $pizzas = getDB()->select("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["category" => "pizza"]);
         
        return $pizzas;
    }
    
    function getProductByID($productID){
        $pizza = getDB()->select("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["category" => "pizza"]);
    }
}