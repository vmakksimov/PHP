<?php


namespace Inheritance;


class Toaster {
    protected int $slots;

    public function __construct() {
        $this->slots = 10;
    }


    public function makingToast(){

        echo  "{$this->slots} Making bread...";
    }

    public function turnOn(){
        echo "turning on";
    }
}