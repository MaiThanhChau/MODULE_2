<?php
include "Models\Product.php";
include "Services\ProductManager.php";
use Models\Product;
use Services\ProductManager;
$productManager = new ProductManager();
$productManager->addProduct(new Product("Samsung",18000000));
$productManager->addProduct(new Product("Apple",20000000));
$productManager->addProduct(new Product("Oppo",12000000));
$productManager->addProduct(new Product("Lenovo",15000000));
$products = $productManager->getProduct();

foreach ( $products as $key => $product ){
    echo $product->getName() . " có giá là " . $product->getPrice() . "<br>";
}
