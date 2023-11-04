<?php 


require_once ("Account.php");

$myAccount = new Account();
$otherAccount = new Account();

$myAccount->balance += 25;

var_dump($myAccount -> balance);
var_dump($otherAccount -> balance);
