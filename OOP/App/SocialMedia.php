<?php

namespace App;

class SocialMedia {
    public function __construct(public int $age, public string $height) {
        
}
    public function getAge($value) {
        return $this->age = $value;
        
    }


}