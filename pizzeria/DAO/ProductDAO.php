<?php
require_once dirname(__FILE__).'/../model/Product.php';

class ProductDAO{ 
    
    public function findProductByCategory($category){
        
        $records = getDB()->select("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["category" => $category]);
        
        if($records != NULL){
            foreach ($records as $record){
                $product = new Product();
                $product->productID = $record["product_id"];
                $product->category = $record["category"];
                $product->name = $record["name"];
                $product->price = $record["price"];
                $product->description = $record["description"];
                
                $products[] = $product;
            }
            
            return $products;
        }else{
            return NULL;
        }
    }
    
    public function findAllProducts(){
        
        $records = getDB()->select("product", [
            "product_id",
            "category",
            "name",
            "price",
            "description",
        ], ["ORDER" => ["category" => "ASC"]]);
        
        if($records != NULL){
            foreach ($records as $record){
                $product = new Product();
                $product->productID = $record["product_id"];
                $product->category = $record["category"];
                $product->name = $record["name"];
                $product->price = $record["price"];
                $product->description = $record["description"];
                
                $pizzas[] = $product;
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
    
    public function createProduct(Product $product){
        
        getDB()->insert("product", [
            "name" => $product->name,
            "category" => $product->category,
            "description" => $product->description,
            "price" => $product->price
        ]);
    }
    
    public function deleteProductByID($productID){
        
        getDB()->delete("product", [
            "product_id" => [$productID]
        ]); 
    }
    
    public function updateProduct(Product $product){
        
        getDB()->update("product", [
            "name" => $product->name,
            "category" => $product->category,
            "description" => $product->description,
            "price" => $product->price
        ], ["product_id" => $product->productID]);
    }
}