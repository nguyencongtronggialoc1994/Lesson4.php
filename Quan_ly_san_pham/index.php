<?php
include 'Models/Product.php';
include 'Services/ProductManager.php';
use Models\Product;
use Services\ProductManager;
$productManager = new ProductManager();
$productManager->add(new Product('MOBILE'));
$productManager->add(new Product('Laptop'));
$products = $productManager->getProduct();
foreach ($products as $value){
    echo $value->getName();
}
?>