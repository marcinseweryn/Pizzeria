<?php
require_once dirname(__FILE__).'/../model/Product.php';

class ProductDAO{ 
    
    public function findAllPizzas(){
        
        $records = getDB()->select("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["category" => "pizza"]);
        
        if($records != NULL){
            $prizzas =[];
            foreach ($records as $record){
                $pizza = new Product();
                $pizza->productID = $record["product_id"];
                $pizza->category = $record["category"];
                $pizza->name = $record["name"];
                $pizza->price = $record["price"];
                $pizza->description = $record["description"];
                
                $pizzas[] = $pizza;
            }
            
            return $pizzas;
        }else{
            return NULL;
        }
    }
    
    public function findProductByID($productID){
        $record = getDB()->get("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["product_id" => $productID]);
        
        if($record != NULL){
            $pizza = new Product();
            $pizza->productID = $record["product_id"];
            $pizza->category = $record["category"];
            $pizza->name = $record["name"];
            $pizza->price = $record["price"];
            $pizza->description = $record["description"];
            
            return $pizza;
        }else{
            return NULL;
        }
    }
}