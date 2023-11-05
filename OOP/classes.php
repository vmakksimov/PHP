<?php 


require_once ("App/Account.php");
require_once ("App/SocialMedia.php");

use App\{Account, SocialMedia};



$myAccount = new Account('Viktor', 0.55);
$otherAccount = new Account('Aneta', 50.55);

$mySocial = new SocialMedia(30, '180');

// $mySocial -> getAge(45);
var_dump($mySocial -> age);
$myAccount?->deposit(150.20)->deposit(250.20);

var_dump($myAccount);
var_dump($otherAccount -> balance);
