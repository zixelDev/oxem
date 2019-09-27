<?php

class Chickens extends Animal {

    public function __construct()
    {
        parent::__construct();
        $this->type = 'Chicken';
        $this->products = random_int(0,1);
    }
    
}
