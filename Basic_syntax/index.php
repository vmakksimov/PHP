<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>