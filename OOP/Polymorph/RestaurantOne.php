<?php

namespace Polymorph;

class RestaurantOne implements RestaurantInterface {
    public function prepareFood(){
        echo "preparing food!";
    }
}