<?php

declare(strict_types=1);

namespace App;

class StaticMethod {


    /**
     * Nearly prints the array
     * 
     * Outputs the array surround by pre tags for formatting
     * 
     * @param array $array the array output
     */
    static public int $number = 1;

    public static function printArray(array $array){

        
        if (count($array) == 0){
            throw new CustomException();
        }

        echo "<br>";
        print_r( $array );
        self::$number++;
    
}
}