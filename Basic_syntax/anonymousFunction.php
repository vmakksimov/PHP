<?php


$multipleyer = 3;

//arrow function - one line of code - return expession only
$multiply = fn ($num) => $num * $multipleyer;


function sum(int|float $a, int|float $b, callable $callback){
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);
