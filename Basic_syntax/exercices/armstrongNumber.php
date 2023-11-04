<?php


$number = 1534;
$a = (string) $number;
echo strlen($a);
echo $a;


function isArmstrongNumber(int $number): bool
{
    $finalNumber = 0;
    $number = (string)$number;
  
    for ($i = 0; $i < strlen((string)$number); $i++) {
        $finalNumber += (int)$number[$i]**mb_strlen($number);
    }

    return $finalNumber === (int) $number;

}

isArmstrongNumber(154);