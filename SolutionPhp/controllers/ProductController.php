<?php
require_once 'models/Product.php';

class ProductController {
    public function index() {
        $products = Product::getProducts();

        if(isset($_GET['category'])) {
            $products = Product::filterProductsByCategory(
                $products,
                $_GET['category']
            );
        }
        if(isset($_GET['discount'])){
            $products = Product::applyDiscount(
                $products,
                $_GET['discount']
            );
        }
        require "views/product_list.php";
    }}

?>