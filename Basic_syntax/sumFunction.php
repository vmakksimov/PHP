<?php


function sum(int|float ...$nums){
    return array_sum($nums);
}

echo sum(5,2,3,4,5);