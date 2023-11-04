<?php


$number = 1534;
$a = (string) $number;
echo strlen($a);
echo $a;


function isArmstrongNumber(int $number): bool
{
    $finalNumber = 0;
    $digits = str_split((string) $number);
  
    // for ($i = 0; $i < strlen((string)$number); $i++) {
    //     $finalNumber += (int)$number[$i]**mb_strlen($number);
    // }

    $digits = array_map(function ($digit) use ($digits) {
        return $digit** count($digits);
    }, $digits);

    return $digits === (int) $number;

}

isArmstrongNumber(154);