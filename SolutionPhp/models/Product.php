<?php

class Product {
    public $id;
    public $name;
    public $price;
    public $category;

    public function __construct($id, $name, $price, $category) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public static function getProducts() {
        return [
            new Product(1, "Laptop Dell", 20000000, "Electronics"),
            new Product(2, "iPhone 14", 25000000, "Electronics"),
            new Product(3, "Nike Shoes", 3000000, "Fashion"),
            new Product(4, "T-shirt", 500000, "Fashion"),
            new Product(5, "Coffee Maker", 1500000, "Home Appliances")
        ];
    }

    public static function filterProductsByCategory($products, $categoryName) {
        return array_filter($products, function($product) use ($categoryName){
            return $product->category === $categoryName; 
        });
    }

    public static function applyDiscount($products, $percent){
        $result = [];

        foreach ($products as $product) {
            $newPrice = $product->price * (1 - $percent / 100);
            $result[] = new Product(
                $product->id,
                $product->name,
                $newPrice,
                $product->category
            ); 
        }
        return $result;
    }

}



?>