<?php 

class Product {
    protected $type;
    protected $qty;
  
    function __construct($type, $qty) {
      $this->type = $type;

      $this->qty = $this->setQty($qty);

    }

    public function setQty($qty) {

        if (!is_int($qty)) {
            throw new Exception("Qty is not a number");
        }
        return $this->qty = $qty; 
    }

}