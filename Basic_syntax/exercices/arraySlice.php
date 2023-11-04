<?php

// declare(strict_types=1);

function slices(string $series, int $size)
{
   if (strlen($series) < $size || $size < 1) {
        return [];
   }

//    $currentString = str_split($series);

 
    $newArray = [];
   

    for ($i = 0; $i <= strlen($series) - $size; $i++){
        $newArray[] = substr($series, $i, $size);
    }
    print_r( $newArray);
    return $newArray;

}

slices("49142",3);