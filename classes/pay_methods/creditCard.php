<?php

require_once (__DIR__ . "/../utilities.php");

class CreditCard {
    private $name; 
    private $cardNumber; 
    private $expiration_date; 
    private $cvv; 


    use Utilities; 
    
    function __construct($name, $surname, $cardNumber, $expiration_date, $cvv) {
        $this->setName($name, $surname); 
        $this->setCardNumber($cardNumber); 
        $this->setExpDate($expiration_date); 
        // $this->expiration_date = $expiration_date;
        $this->setCvv($cvv);
    }

    public function setName($name, $surname) {
        if (is_int($name) && is_int($surname)) {
            throw new Exception("Nome non valido.");
        } 
        $this->name = $name . " " . $surname;
    }
    public function getName() {
        return $this->name;
    }

    public function setCardNumber($number) {

        $numlength = strlen((string)$number);

        if (!is_int($number) && !$numlength = 16) {
            throw new Exception("Numero carta non valido.");
        } 
        $this->cardNumber = $number; 
    }
    public function getCardNumber() {
        return $this->cardNumber;
    }

    public function setExpDate($date) {
        if (!Utilities::validateDate($date, "m/y")) {
            throw new Exception("Scadenza non valida");
        }
        $this->expiration_date = $date;
    }
    public function getExpDate() {
        return $this->expiration_date;
    }

    public function setCvv($secCode) {
        $codeLeng = strlen((string)$secCode);
        if (!is_int($secCode) && !$numlength = 3) {
            throw new Exception("Cvv non valido");
            
        } 
        $this->cvv = $secCode; 
    }
    public function getCvv() {
        return $this->cvv;
    }
}