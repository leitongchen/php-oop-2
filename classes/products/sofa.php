<?php 

require_once (__DIR__ . "/../product.php");


class SofaProduct extends Product {

    protected $name;
    protected $model;
    protected $price;
  
    function __construct($type, $name, $model, $price, $qty) {
        parent::__construct($type, $qty);

        $this->name = $name; 
        $this->model = $model; 
        $this->price = $this->setPrice($price);
    }

    public function setPrice($price) {

        if (!is_int($price)) {
            throw new Exception("price is not a number");
        }
        return $this->price = $price; 
    }
  
}