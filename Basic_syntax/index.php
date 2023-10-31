<?php include "nav.php"; ?>
    <h1><?php 

    $name = 'Viktorio';
    $age = 19;
    const DESCRIPTION = "BEST";

   function isExists($name){
    if ($name == "Viktorio") {
        echo"YESSS";

   }else{
        echo "Nooo";
   }
}

    $data = ["Victor", "Lorenzo"];
    echo "<h1>Hello World, $data[1]</h1>";
    echo "Hello my name is {$name}";

    isExists('Viktorio');
   
    ?></h1>
