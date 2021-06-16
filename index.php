<?php 

//require_once("./usersList.php");
require_once("./classes/user.php");
require_once("./classes/premiumUser.php");

require_once("./classes/cart.php");

require_once("./classes/product.php");
require_once("./classes/products/sofa.php");


require_once("./classes/payment.php");
require_once("./classes/pay_methods/creditCard.php");

require_once("./classes/utilities.php");



$userA = new PremiumUser("leitong", "chen", "leitong@leitong.com", "leitongchen"); 
$cart1 = new Cart($userA);

echo $userA->renderUser();

$creditCard = new CreditCard("Leitong", "Chen", 1234567892384782, "09/23", 423);

$userA->addCreditCard($creditCard);

var_dump($creditCard);

$product1 = new SofaProduct("divano", "Emma", "3B", 1500, 1);

$cart1->addToCart($product1);

var_dump($cart1);
// var_dump($creditCard);
