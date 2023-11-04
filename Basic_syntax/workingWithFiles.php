<?php


// $directory = scandir(__DIR__);

if (file_exists('example.txt')){
    echo filesize('example.txt');

    file_put_contents('example.txt','Hello world');

    clearstatcache();

    echo file_get_contents('example.txt');
}

// print_r($directory);