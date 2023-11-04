<?php

$txt = '';
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0';
$numbers = mt_rand(100, 999);
// $strongArray = range("A", "Z"); also generates rangom characters
for($i=0; $i<2; $i++){
        $txt.=substr($str, rand(0, strlen($str)), 1);   
    }

$txt.=$numbers;
echo $txt;
