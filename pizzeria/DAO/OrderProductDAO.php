<?php
require_once dirname(__FILE__).'/../model/OrderProduct.php';

class OrderProductDAO{
    
    
    
    public function addProductToOrderProduct(OrderProduct $orderProduct){
        
        getDB()->insert("order_product", [
            "order_id" => $orderProduct->orderID,
            "product_id" => $orderProduct->productID,
            "size" => $orderProduct->size
        ]);      
    }
    
    public function findOrderProductDetailsByOrderID($orderID){
        
        $orderProducts = getDB()->select("product", 
            ["[><]order_product" => ["product.product_id" => "product_id"]],[
                "product.product_id",
                "product.name",
                "product.price",
                "order_product.order_product_id",
                "order_product.size"
            ], ["order_product.order_id" => $orderID]);
        
        return $orderProducts;
    }
    
    public function deleteProductFromOrderProductByProductID($productID){
        
        getDB()->delete("order_product", [
            "order_product_id" => [$productID]
        ]);     
    }
    
    public function deleteProductFromOrderProductByOrderID($orderID){
        getDB()->delete("order_product", [
            "order_id" => [$orderID]
        ]); 
    }
    
}