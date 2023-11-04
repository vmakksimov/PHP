<?php


class Account{
    // public $name;
    // public $balance = 5.5;

    public function __construct(
        public string $name, 
        public float $balance
        ){

        }

        public function deposit(float $amount){
            $this -> balance += $amount;

            return $this;
        }
    
}

