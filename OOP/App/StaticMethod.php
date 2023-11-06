<?php


namespace App;

class StaticMethod {
    static public int $number = 1;
    public static function printArray($array){
        echo "<br>";
        print_r( $array );
        self::$number++;
    }
}