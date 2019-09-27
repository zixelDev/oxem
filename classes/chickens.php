<?php

class Chickens extends Animal {

    public function __construct()
    {
        parent::__construct();
        $this->type = 'Chicken';
    }
    public function getEggs()
    {
        return random_int(0,1);
        
    }
}
