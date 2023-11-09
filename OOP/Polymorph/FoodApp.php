<?php

namespace Polymorph;


class FoodApp {
    public function __construct(RestaurantInterface $restaurant){
        $restaurant -> prepareFood();
    }
}