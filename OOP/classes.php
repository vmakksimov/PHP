<?php 


// require_once ("App/Account.php");
// require_once ("App/SocialMedia.php");

spl_autoload_register(function ($class) {
    $prefix = str_replace("\\", "/", $class);
    $path = "{$prefix}.php";
    require_once $path;
});

require_once ("Encapsulation/PrivateAccount.php");
// require_once ("Inheritance/ToasterPremium.php");

use App\{Account, SocialMedia, StaticMethod};
use Encapsulation\PrivateAccount;
use Inheritance\ToasterPremium;

$toasterPremium = new ToasterPremium();

var_dump($toasterPremium->makingToast());
echo "<br>";


$privateAccount = new PrivateAccount("Lorenzo", 150.50);
var_dump($privateAccount->getBalance());


$myAccount = new Account('Viktor', 0.55);
$otherAccount = new Account('Aneta', 50.55);
$mySocial = new SocialMedia(30, '180');

// $mySocial -> getAge(45);
var_dump($mySocial -> age);
echo '<br>';
$myAccount?->deposit(150.20)->deposit(250.20);
echo '<br>';
var_dump($myAccount);
echo '<br>';
var_dump($otherAccount -> balance);
echo '<br>';
var_dump($myAccount::PEOPLE_BUDGET);
StaticMethod::printArray([5,4,3]);
var_dump(StaticMethod::$number);
