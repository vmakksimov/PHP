<?php

namespace App;

class CustomException extends \Exception{
    protected $message = "Sorry, array is empty.";
}