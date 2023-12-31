<?php 


// require_once ("App/Account.php");
// require_once ("App/SocialMedia.php");

spl_autoload_register(function ($class) {
    $prefix = str_replace("\\", "/", $class);
    $path = "{$prefix}.php";
    require_once $path;
});



use App\{Account, CustomException, SocialMedia, StaticMethod};



$myAccount = new Account('Viktor', 0.55);
$otherAccount = new Account('Aneta', 50.55);
$mySocial = new SocialMedia(30, '180');
$staticMethod = new StaticMethod();



try {
    $staticMethod -> printArray([]);
} catch (CustomException $e) {
    echo "Customer Exception: {$e->getMessage()} </br>";
} catch (Exception $e) {
    echo "Default Exception: {$e->getMessage()} </br>";
} finally {
    echo    "Finally block element";
}

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
StaticMethod::printArray([]);
var_dump(StaticMethod::$number);
