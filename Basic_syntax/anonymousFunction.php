<?php


$multipleyer = 3;

//arrow function - one line of code
$multiply = fn ($num) => $num * $multipleyer;


function sum($a, $b, $callback){
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);
