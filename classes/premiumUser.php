<?php 

require_once(__DIR__ . "/user.php");

class PremiumUser extends User {

    protected $discount = 10; 


    public function setDiscount() {

        $this->discount = 30; 
    }

    public function getDiscount() {
        return $this->discount; 
    }
}