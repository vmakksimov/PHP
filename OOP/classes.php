<?php 


require_once ("Account.php");

$myAccount = new Account('Viktor', 0.55);
$otherAccount = new Account('Aneta', 50.55);

$myAccount?->deposit(150.20)->deposit(250.20);

var_dump($myAccount -> balance);
var_dump($otherAccount -> balance);
