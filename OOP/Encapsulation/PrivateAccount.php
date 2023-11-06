<?php

namespace Encapsulation;
class PrivateAccount{

    public const PEOPLE_BUDGET = 1000;
    // public $name;
    // public $balance = 5.5;

    public function __construct(
        private string $name, 
        private float $balance
        ){

        }

    public function deposit(float $amount){
        $this -> balance += $amount;

        return $this;
    }

    public function getBalance(){
        return $this -> balance;
    }

    public function setBalance($value){
        if ($value < 0){
            return; 
        }

        $this -> balance = $value;

        self::sendEmail();

    }

    private function sendEmail(){
        return "Welcome!";
    }

}