<?php
namespace Services;
class ProductManager{
    private $product;
    public function __construct()
    {
        $this->product = [];
    }
    public function addProduct($product)
    {
        $this->product[] = $product;
    }
    public function getProduct()
    {
        return $this->product;
    }
}