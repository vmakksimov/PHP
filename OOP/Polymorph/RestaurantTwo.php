<?php

namespace Polymorph;

class RestaurantTwo implements RestaurantInterface {
    public function prepareFood (){
        echo 'Preparing food for restaurant two';
    }
}