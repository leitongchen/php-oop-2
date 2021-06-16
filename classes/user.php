<?php 

require_once(__DIR__ . "/utilities.php");

class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $username; 

    protected $created_at;

    protected $creditCards = []; 


    use Utilities; 

    function __construct($name, $surname, $email, $username) {

        $this->setName($name); 
        $this->setSurname($surname); 
        $this->setEmail($email);
        $this->setUsername($username); 

        $this->setCreationDate(); 
    }
    
    public function setName($name) {
        if (strlen($name) < 2) {
            throw new Exception("Name is not valid. Min 2 char.");
        } 
        $this->name = $name; 
    }
    public function getName() {
        return $this->name; 
    }

    public function setSurname($surname) {
        if (strlen($surname) < 2) {
            throw new Exception("Surname is not valid. Min 2 char.");
        } 
        $this->surname = $surname; 
    }
    public function getSurname() {
        return $this->surname; 
    }

    public function setEmail($email) {
        if (!strstr($email, "@") && !strstr($email, ".")) {
            throw new Exception("Email is not valid.");
        }
        $this->email = $email; 
    }
    public function getEmail() {
        return $this->email;
    }

    public function setUsername($username) {
        if (strlen($username) < 5 && strlen($username) > 15) {
            throw new Exception("Username is not valid. Min 5 and max 15 char needed.");
        } 
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username; 
    }

    protected function setCreationDate() {
        $curDate_arr = getdate();

        $currentDate = $curDate_arr["mday"] . "-" . $curDate_arr["mon"] . "-" . $curDate_arr["year"];
        $currentTime = $curDate_arr["hours"] . "-" . $curDate_arr["minutes"] . "-" . $curDate_arr["seconds"];
        
        $this->created_at = $currentDate . " " . $currentTime;
    }
    public function getCreationDate() {
        return $this->created_at; 
    }

    public function renderUser() {
        $toReturn = "";

        $toReturn .= "Nome utente: " . $this->name. "<br>";
        $toReturn .= "Cognome utente: " . $this->surname . "<br>";
        $toReturn .= "Email: " . $this->email . "<br>";
        $toReturn .= "Username: " . $this->username . "<br><br>";
        $toReturn .= "Subscription date: " . $this->created_at . "<br>";

        return $toReturn; 
    }

    public function addCreditCard($cardData) {

        $this->creditCards[] = $cardData; 

        // $this->creditCard["name"] = $cardData["name"];
        // $this->creditCard["cardNumber"] = $cardData["cardNumber"];
        // $this->creditCard["expiration_date"] = $cardData["expiration_date"];
        // $this->creditCard["cvv"] = $cardData["cvv"];
    }
    
}



