<?php


namespace Inheritance;


class ToasterPremium extends Toaster {
    protected int $slots;
    private int $duration = 1;

    public function __construct($newDuration) {
        $this->slots = 4;
        $this->duration = $newDuration;
    }

    public function makingToast(){
        parent::makingToast();
        echo  "for {$this->duration}minutes Making bread...";
    }
}

