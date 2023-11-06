<?php 


// require_once ("App/Account.php");
// require_once ("App/SocialMedia.php");

spl_autoload_register(function ($class) {
    $prefix = str_replace("\\", "/", $class);
    $path = "{$prefix}.php";
    require_once $path;
});

// require_once ("Encapsulation/PrivateAccount.php");
// require_once ("Inheritance/ToasterPremium.php");

use Encapsulation\PrivateAccount;
use Inheritance\{Toaster, ToasterPremium};

$toasterPremium = new ToasterPremium(550);
$toaster = new Toaster();


echo "<br>";
echo $toaster->makingToast();
echo "<br>";
echo $toaster->turnOn();
echo "<br>";


$privateAccount = new PrivateAccount("Lorenzo", 150.50);
var_dump($privateAccount->getBalance());