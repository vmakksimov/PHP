<?php


$names = ['Lorenzo', 'Viktor', 'Elena'];

unset($names[0]);

$names = array_values($names);

print_r($names);

echo $names[0];