<?php

function set_name($name){
    $current_name = '';
    $current_name = $name . ' Maksimov';

    // echo "My last name is {$current_name}";
    return $current_name;
}

echo set_name("Viktor");