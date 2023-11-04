<?php


$myCup = 'empty';


function fillCup(&$cup){
    $cup = 'filled';
}



fillCup($myCup);

echo $myCup;