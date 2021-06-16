<?php 

class Payment {

    protected $typology;
    protected $date;
    protected $userName;

    function __construct($typology, $date, $userName) {
        $this->typology = $typology;
        $this->date = $date;
        $this->userName = $userName;
    }
}