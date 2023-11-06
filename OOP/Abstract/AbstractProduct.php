<?php


namespace Inheritance;



abstract class AbstractProduct {

    abstract public function __construct(array $data, int $numbers);

    public function setup(){
        echo 'setup';
    }
    abstract public function turnOn();
}


class NewProduct extends AbstractProduct {

    public function __construct(public array $data, public int $numbers) {
        $this -> data;
        $this -> numbers = $numbers;
    }
    
    
    public function turnOn(){
        echo 'hakunaa matata';
        echo '<br>';
        echo join(', ', $this -> data);
        echo $this -> numbers;
        
      
    }
}


$newProduct = new NewProduct([12,3,4], 10);

$newProduct->turnOn();


